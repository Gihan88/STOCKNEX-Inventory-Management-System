<!DOCTYPE html>
<html>
<head>
    <title>Add New User | STOCKNEX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
        }
        .container {
            width: 450px;
            margin: 70px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        button {
            background: #10b981;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>👥 Add New User</h2>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Save User</button>

        <a href="{{ route('users.index') }}">Cancel</a>
    </form>
</div>

</body>
</html>
