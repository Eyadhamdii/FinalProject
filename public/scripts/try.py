import cv2

# Create a VideoCapture object to capture video from the camera
video_capture = cv2.VideoCapture(0)

# Check if the camera capture was successful
if not video_capture.isOpened():
    print("Failed to open camera")
    exit(1)

print("Camera opened successfully")

# Loop to continuously read frames from the camera
while True:
    # Read the current frame from the camera
    ret, frame = video_capture.read()

    # Check if the frame was read successfully
    if not ret:
        print("Failed to read frame from camera")
        break

    # Perform any further processing or display the frame as needed
    # ...

# Release the VideoCapture object and close the camera
video_capture.release()
cv2.destroyAllWindows()
