import face_recognition
import cv2
import numpy as np
import requests
import mysql.connector
from datetime import datetime

# Connect to the MySQL database
connection = mysql.connector.connect(
    host='localhost',
    port='3306',
    user='root',
    password='',
    database='laravel6'
)

cursor = connection.cursor()

# Load known face encodings and names from the database

# Get a reference to webcam #0 (the default one)
video_capture = cv2.VideoCapture(0)

# Load a sample picture and learn how to recognize it.
obama_image = face_recognition.load_image_file("./Eyad.JPG")
obama_face_encoding = face_recognition.face_encodings(obama_image)[0]

# Load a sample picture and learn how to recognize it.
noha_image = face_recognition.load_image_file("./nohaadel.jpeg")
noha_face_encoding = face_recognition.face_encodings(noha_image)[0]


noha2_image = face_recognition.load_image_file("./nohaayman.jpeg")
noha2_face_encoding = face_recognition.face_encodings(noha2_image)[0]

engy_image = face_recognition.load_image_file("./engy.jpeg")
engy_face_encoding = face_recognition.face_encodings(engy_image)[0]

nourhan_image = face_recognition.load_image_file("./nourhan.jpeg")
nourhan_face_encoding = face_recognition.face_encodings(nourhan_image)[0]


MohamedSaber_image = face_recognition.load_image_file("./MohamedSaber.jpeg")
MohamedSaber_face_encoding = face_recognition.face_encodings(MohamedSaber_image)[0]

Ammar_image = face_recognition.load_image_file("./Ammar.jpeg")
Ammar_face_encoding = face_recognition.face_encodings(Ammar_image)[0]


# Create arrays of known face encodings and their names
known_face_encodings = [
    obama_face_encoding,
    noha_face_encoding,
    noha2_face_encoding,
    engy_face_encoding,
    nourhan_face_encoding,
    MohamedSaber_face_encoding,
    Ammar_face_encoding,


]
known_face_names = [
    "Eyad",
    "Noha Adel",
    "Noha ayman",
    "Engy Ahmed",
    "Nourhan Hossam",
    "MohamedSaber",
    "Ammar"
]

# Initialize some variables
face_locations = []
face_encodings = []
face_names = []
prev_name = None  # Store previously recognized name

while True:
    # Grab a single frame of video
    ret, frame = video_capture.read()

    # Resize frame of video to 1/4 size for faster face recognition processing
    small_frame = cv2.resize(frame, (0, 0), fx=0.25, fy=0.25)

    # Convert the image from BGR color (which OpenCV uses) to RGB color (which face_recognition uses)
    rgb_small_frame = small_frame[:, :, ::-1]

    # Find all the faces and face encodings in the current frame of video
    face_locations = face_recognition.face_locations(frame)
    face_encodings = face_recognition.face_encodings(frame, face_locations)

    face_names = []
    for face_encoding in face_encodings:
        # See if the face is a match for the known face(s)
        matches = face_recognition.compare_faces(known_face_encodings, face_encoding)
        name = "Unknown"

        # Or instead, use the known face with the smallest distance to the new face
        face_distances = face_recognition.face_distance(known_face_encodings, face_encoding)
        best_match_index = np.argmin(face_distances)
        if matches[best_match_index]:
            name = known_face_names[best_match_index]
            if name != prev_name:
                print(name)
                prev_name = name
                # Get the current time and day
                current_time = datetime.now().strftime("%H:%M:%S")
                current_day = datetime.now().strftime("%A")
                # Insert recognized name into the database
                cursor.execute('INSERT INTO recognized_names (name, day, time) VALUES (%s, %s, %s)', (name, current_day, current_time))
                connection.commit()

        face_names.append(name)

    # Display the results
    for (top, right, bottom, left), name in zip(face_locations, face_names):
        # Scale back up face locations since the frame we detected in was scaled to 1/4 size
        top *= 4
        right *= 4
        bottom *= 4
        left *= 4

        # Draw a box around the face
        cv2.rectangle(frame, (left, top), (right, bottom), (0, 0, 255), 2)

        # Draw a label with a name below the face
        cv2.rectangle(frame, (left, bottom - 35), (right, bottom), (0, 0, 255), cv2.FILLED)

        font = cv2.FONT_HERSHEY_DUPLEX
        cv2.putText(frame, name, (left + 6, bottom - 6), font, 1.0, (255, 255, 255), 1)


    # Display the resulting image
    cv2.imshow('Video', frame)

    # Hit 'q' on the keyboard to quit!
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

# Release handle to the webcam
video_capture.release()
cv2.destroyAllWindows()