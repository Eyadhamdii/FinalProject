<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .present {
        color: green;
        font-weight: bold;
    }

    .absent {
        color: red;
        font-weight: bold;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Recognized Name Day</th>
            <th>Recognized Name Time</th> <!-- New column for time -->

            <!-- Add other columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach ($registeredStudents as $student)
            <tr>
                <td>{{ $student->user->name }}</td>
                <td>{{ $student->user->email }}</td>
                <td class="{{ isset($recognizedNames[$student->user->name]) && $recognizedNames[$student->user->name]['day'] === $student->timetable->day ? 'present' : 'absent' }}">
                    {{ isset($recognizedNames[$student->user->name]) && $recognizedNames[$student->user->name]['day'] === $student->timetable->day ? 'Present' : 'Absent' }}
                </td>
                <td>{{ isset($recognizedNames[$student->user->name]['day']) ? $recognizedNames[$student->user->name]['day'] : '' }}</td>
                <td>{{ isset($recognizedNames[$student->user->name]['time']) ? $recognizedNames[$student->user->name]['time'] : '' }}</td>

                <!-- Add other columns as needed -->
            </tr>
        @endforeach
    </tbody>
</table>
