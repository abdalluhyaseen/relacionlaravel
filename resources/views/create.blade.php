<h1>Add New Student</h1>

    <form action="{{ route('mage.store') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="coach_id">Coach:</label>
        <select id="coach_id" name="coach_id" required>
            @foreach ($coaches as $coach)
                <option value="{{ $coach->id }}">{{ $coach->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
