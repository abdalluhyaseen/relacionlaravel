<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student</title>
</head>
<body>
<h1 style="text-align: center; font-family: Arial, sans-serif; color: #333;">Show All Students</h1>

<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px auto; width: 80%;">

</div>

<table style="width: 80%; margin: auto; border-collapse: collapse; text-align: left; font-family: Arial, sans-serif; border: 1px solid #ddd;">
    <thead style="background-color: #f8f9fa;">
        <tr>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">#</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">coaches</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">student</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">Age</th>
        </tr>
    </thead>
    <tbody>
         @foreach($coaches as $student)
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">  @foreach($student->students as $student)
                {{ $student->name }}
            <td style="padding: 10px; border: 1px solid #ddd;">
                {{ $student->age }}
            </td>
        @endforeach</td>
            </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>
