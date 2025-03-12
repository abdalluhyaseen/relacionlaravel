<table style="width: 80%; margin: auto; border-collapse: collapse; text-align: left; font-family: Arial, sans-serif; border: 1px solid #ddd;">
    <thead style="background-color: #f8f9fa;">
        <tr>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">#</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">Name</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">Email</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">coaches</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->email }}</td>
                {{-- <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->Postal_Code ? $student->postal_Code->postal_code : "No postal code available" }}</td> --}}
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->phone ? $student->phone : "No phone number available" }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
