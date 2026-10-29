<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Product | STOCKNEX</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
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
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            background: #10b981;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            margin-top: 20px;
            cursor: pointer;
        }

        a {
            margin-left: 15px;
            color: #64748b;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>📦 Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Product Name</label>
        <input type="text" name="name"
               value="{{ old('name', $product->name) }}" required>

        <label>Product Code</label>
        <input type="text" name="code"
               value="{{ old('code', $product->code) }}" required>

        <label>Cost Price (Rs.)</label>
        <input type="number" step="0.01" name="cost"
               value="{{ old('cost', $product->cost) }}" required>

        <label>Selling Price (Rs.)</label>
        <input type="number" step="0.01" name="price"
               value="{{ old('price', $product->price) }}" required>

        <label>Quantity</label>
        <input type="number" name="quantity"
               value="{{ old('quantity', $product->quantity) }}" required>

        <label>Description</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea>

        <button type="submit">Update Product</button>

        <a href="{{ route('products.index') }}">Cancel</a>

    </form>

</div>

</body>
</html>
