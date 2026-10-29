<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STOCKNEX | Add Product</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 15px;
        }

        h2 {
            color: #0f172a;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 7px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            box-sizing: border-box;
        }

        .btn {
            background: #10b981;
            color: white;
            padding: 13px 25px;
            border: none;
            border-radius: 8px;
            margin-top: 20px;
            cursor: pointer;
        }

        .back {
            text-decoration: none;
            color: #0f172a;
            margin-left: 15px;
        }

        .error {
            color: #dc2626;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>📦 Add New Product</h2>
    <p>Enter product details below.</p>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Product Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label>Product Code</label>
        <input type="text" name="code" value="{{ old('code') }}" required>

        <label>Cost Price (Rs.)</label>
        <input type="number" name="cost" step="0.01"
               min="0" value="{{ old('cost') }}" required>

        <label>Selling Price (Rs.)</label>
        <input type="number" name="price" step="0.01"
               min="0" value="{{ old('price') }}" required>

        <label>Quantity</label>
        <input type="number" name="quantity" min="0"
               value="{{ old('quantity') }}" required>

        <label>Description</label>
        <textarea name="description" rows="4">{{ old('description') }}</textarea>

        <button type="submit" class="btn">
            Save Product
        </button>

        <a href="{{ route('products.index') }}" class="back">
            Cancel
        </a>

    </form>

</div>

</body>
</html>
