<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STOCKNEX | Add Customer</title>

    <style>
        * { box-sizing: border-box; }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 35px 15px;
        }

        .container {
            max-width: 520px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
        }

        h2 { color: #0f172a; }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 18px;
            background: #10b981;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }

        .cancel {
            background: #64748b;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>👥 Add New Customer</h2>
    <p>Enter customer details below.</p>

    <form action="{{ route('customers.store') }}" method="POST">

        @csrf

        <label>Customer Name</label>
        <input type="text" name="name"
               value="{{ old('name') }}" required>
        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror

        <label>Email Address</label>
        <input type="email" name="email"
               value="{{ old('email') }}" required>
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror

        <label>Phone Number</label>
        <input type="text" name="phone"
               value="{{ old('phone') }}" required>
        @error('phone')
            <p class="error">{{ $message }}</p>
        @enderror

        <label>Address</label>
        <textarea name="address" rows="3">{{ old('address') }}</textarea>
        @error('address')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn">
            Save Customer
        </button>

        <a href="{{ route('customers.index') }}" class="btn cancel">
            Cancel
        </a>

    </form>

</div>

</body>
</html>
