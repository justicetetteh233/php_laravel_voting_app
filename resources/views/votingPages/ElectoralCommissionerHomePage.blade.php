<!DOCTYPE html>
<div>
    <h1>Welcome to the Electoral Commissioner Home Page</h1>
<h2>List of Registered Electoral Commissioners:</h2>

<ul>
    @foreach ($electoralCommissioners as $commissioner)
        <li>{{ $commissioner->name }}</li>
    @endforeach
</ul>

<form method="POST" action="{{ route('electoral_commissioner.store') }}">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Register</button>
</form>

</div>


</html>