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
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">Name</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">coaches</th>
        </tr>
    </thead>
    <tbody>
         @foreach($students as $student)
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->coach->name }}</td>
        @endforeach
    </tbody>
</table>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px auto; width: 80%;">
    <button style="padding: 10px 20px; font-size: 14px; color: #fff; background-color: #28a745; border: none; border-radius: 5px; cursor: pointer; text-transform: uppercase; transition: background-color 0.3s;">
        <a href="{{ route('mage.create') }}" style="text-decoration: none; color: #fff;">Add New</a>
    </button>
</div>

</body>
</html>
