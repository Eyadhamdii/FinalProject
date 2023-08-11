<!-- resources/views/timetable/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
    <style>
        /* Add your custom CSS styles for the course details here */
        .course-details {
            margin: 20px;
        }
        .course-details h2 {
            margin-bottom: 10px;
        }
        .course-details p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="course-details">
        <h2>Course Details</h2>
        <p><strong>Name:</strong> {{ $course->name }}</p>
        <p><strong>Date:</strong> {{ $course->date }}</p>
        <p><strong>Time:</strong> {{ $course->time }}</p>
        <!-- Add more details about the course as needed -->
    </div>
</body>
</html>
