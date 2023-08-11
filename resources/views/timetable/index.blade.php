@extends('layouts.app')

@section('content')
    <h1>Timetable</h1>
    <table>
        <thead>
            <tr>
                <th>Day</th>
                <th>Time</th>
                <th>Course</th>
            </tr>
        </thead>
        <tbody>
        @foreach($timetables as $timetable)
            <tr>
                <td>{{ $timetable->day }}</td>
                <td>{{ $timetable->time }}</td> <!-- Display the time -->
                <td>{{ $timetable->course->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
