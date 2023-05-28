<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <!-- Add other columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach ($course->registeredStudents as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <!-- Add other columns as needed -->
        </tr>
        @endforeach
    </tbody>
</table>
