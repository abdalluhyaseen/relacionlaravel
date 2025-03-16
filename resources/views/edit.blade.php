<h1>Edit Student</h1>

    <form action="{{ route('mage.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}" required><br><br>

        <label for="coach_id">Coach:</label>
        <select id="coach_id" name="coach_id" required>
            @foreach ($coaches as $coach)
                <option value="{{ $coach->id }}" {{ $student->coach_id == $coach->id ? 'selected' : '' }}>
                    {{ $coach->name }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update Student</button>
    </form>

    <a href="{{ route('mage.index') }}">Back to Students</a>
