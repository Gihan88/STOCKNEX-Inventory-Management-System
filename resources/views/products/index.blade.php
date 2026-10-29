<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>STOCKNEX | Product Management</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 17px;
            line-height: 1.6;
            color: #1b2b50;
            background:
                radial-gradient(circle at 15% 5%, #cbd9ff, transparent 42%),
                radial-gradient(circle at 95% 20%, #e3d7ff, transparent 40%),
                radial-gradient(circle at 70% 100%, #c9f1f1, transparent 45%),
                #edf3ff;
        }

        a {
            text-decoration: none;
        }

        button,
        input {
            font: inherit;
        }

        .layout {
            display: grid;
            grid-template-columns: 270px minmax(0, 1fr);
            gap: 22px;
            min-height: 100vh;
            padding: 20px;
        }

        .glass {
            background: rgba(255, 255, 255, 0.72);
            border: 1px solid rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            box-shadow: 0 15px 38px rgba(48, 77, 132, 0.13);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        /* SIDEBAR */

        .sidebar {
            padding: 22px 15px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 20px;
            height: calc(100vh - 40px);
            overflow-y: auto;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 9px 24px;
            border-bottom: 1px solid #cbd7ef;
            color: #1b2b50;
        }

        .mark {
            display: grid;
            place-items: center;
            width: 48px;
            height: 48px;
            border-radius: 15px;
            color: white;
            background: linear-gradient(135deg, #4b72ed, #8465e8);
            font-size: 25px;
            font-weight: 800;
            flex-shrink: 0;
        }

        .brand strong {
            display: block;
            font-size: 23px;
        }

        .brand small {
            display: block;
            font-size: 13px;
            color: #637391;
        }

        .label {
            font-size: 13px;
            font-weight: 800;
            color: #6c7d9b;
            letter-spacing: 1px;
            margin: 24px 12px 10px;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px;
            border-radius: 14px;
            margin: 3px 0;
            color: #2c3e65;
            font-size: 16px;
            font-weight: 650;
            transition: transform .2s, background .2s, box-shadow .2s;
        }

        .nav:hover {
            background: #e6ebff;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 18px rgba(87, 106, 214, .15);
        }

        .nav.active {
            color: white;
            background: linear-gradient(110deg, #5877e9, #8067e6);
            box-shadow: 0 8px 18px #576ad64a;
        }

        .icon {
            width: 23px;
            text-align: center;
            flex-shrink: 0;
        }

        .bottom {
            margin-top: auto;
            border-top: 1px solid #cbd7ef;
            padding-top: 12px;
        }

        .bottom form {
            margin: 0;
        }

        .logout {
            border: 0;
            background: transparent;
            width: 100%;
            text-align: left;
            cursor: pointer;
            color: #b43458;
        }

        /* MAIN CONTENT */

        .main {
            min-width: 0;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 17px 24px;
            margin-bottom: 28px;
            gap: 12px;
        }

        .breadcrumb {
            font-size: 17px;
            color: #405475;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
        }

        .avatar {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border-radius: 14px;
            background: #dce5ff;
            color: #4056b4;
            font-weight: 800;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .eyebrow {
            color: #596bdf;
            font-size: 14px;
            letter-spacing: 1px;
            font-weight: 800;
        }

        .header h1 {
            font-size: clamp(32px, 3vw, 42px);
            margin: 8px 0;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .header p {
            color: #5b6d8c;
            font-size: 18px;
            margin: 0;
        }

        /* BUTTONS */

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 13px 20px;
            min-height: 48px;
            border: 0;
            border-radius: 13px;
            color: white;
            background: linear-gradient(120deg, #4e70e7, #7965e2);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: transform .2s, box-shadow .2s;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px #5b6cce5b;
        }

        .edit,
        .delete {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 15px;
            border: 0;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: transform .2s;
        }

        .edit {
            background: #e4ecff;
            color: #2d52ae;
        }

        .delete {
            background: #ffe4eb;
            color: #a72e4f;
        }

        .edit:hover,
        .delete:hover {
            transform: translateY(-2px);
        }

        /* STATISTICS */

        .stats {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
            margin-bottom: 25px;
        }

        .stat {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px;
            transition: transform .2s;
        }

        .stat:hover {
            transform: translateY(-3px);
        }

        .stat-label {
            color: #5b6d8c;
            font-size: 17px;
            font-weight: 650;
        }

        .stat-number {
            font-size: 38px;
            font-weight: 800;
            margin-top: 7px;
        }

        .stat-icon {
            font-size: 30px;
        }

        /* PRODUCTS TABLE */

        .panel {
            padding: 26px;
        }

        .panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap;
        }

        .panel h2 {
            font-size: 27px;
            margin: 0 0 5px;
        }

        .panel-header p {
            font-size: 17px;
            color: #5b6d8c;
            margin: 0;
        }

        .search {
            border: 1px solid #c8d5f5;
            background: white;
            border-radius: 12px;
            padding: 13px 15px;
            width: min(100%, 340px);
            outline: none;
            font-size: 16px;
            color: #1b2b50;
        }

        .search:focus {
            border-color: #6e79eb;
            box-shadow: 0 0 0 3px #6e79eb22;
        }

        .table-wrap {
            overflow-x: auto;
            margin-top: 24px;
        }

        table {
            width: 100%;
            min-width: 780px;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            background: #e8eeff;
            color: #405577;
            padding: 17px;
            font-size: 15px;
        }

        td {
            padding: 18px 17px;
            border-bottom: 1px solid #dce4f4;
            font-size: 16px;
            color: #26395f;
            vertical-align: middle;
        }

        tbody tr:hover {
            background: #ffffff8a;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .actions form {
            margin: 0;
        }

        .alert {
            padding: 15px 18px;
            margin-bottom: 20px;
            border-radius: 12px;
            background: #e0faed;
            color: #176446;
            font-weight: 650;
        }

        .errors {
            background: #ffe8ec;
            color: #92314c;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #657795;
        }

        .mobile-toggle,
        .shade {
            display: none;
        }

        [hidden] {
            display: none !important;
        }

        /* MOBILE */

        @media (max-width: 850px) {
            .layout {
                display: block;
                padding: 12px;
            }

            .sidebar {
                position: fixed;
                left: 0;
                top: 0;
                width: min(290px, 85vw);
                height: 100vh;
                z-index: 20;
                transform: translateX(-110%);
                transition: transform .2s;
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .shade.show {
                display: block;
                position: fixed;
                inset: 0;
                background: #18234588;
                z-index: 10;
            }

            .mobile-toggle {
                display: inline-block;
                border: 0;
                background: #e9edff;
                padding: 9px 13px;
                border-radius: 10px;
                cursor: pointer;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 34px;
            }

            .panel {
                padding: 18px;
            }

            .profile .name {
                display: none;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                transition: none !important;
            }
        }
    </style>
</head>

<body>

    <div
        class="shade"
        id="shade"
        onclick="toggleMenu(false)">
    </div>

    <div class="layout">

        <!-- SIDEBAR -->

        <aside class="sidebar glass" id="sidebar">

            <a href="{{ route('dashboard') }}" class="brand">
                <span class="mark">S</span>

                <span>
                    <strong>STOCKNEX</strong>
                    <small>Inventory workspace</small>
                </span>
            </a>

            <div class="label">MAIN MENU</div>

            <a class="nav" href="{{ route('dashboard') }}">
                <span class="icon">▦</span>
                Dashboard
            </a>

            <a class="nav" href="{{ route('users.index') }}">
                <span class="icon">♙</span>
                User Management
            </a>

            <a class="nav" href="{{ route('customers.index') }}">
                <span class="icon">♧</span>
                Customer Management
            </a>

            <a class="nav active" href="{{ route('products.index') }}">
                <span class="icon">▣</span>
                Product Management
            </a>

            <div class="bottom">

                <div class="label">SYSTEM</div>

                <a class="nav" href="{{ route('settings.index') }}">
                    <span class="icon">⚙</span>
                    Settings
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="nav logout">
                        <span class="icon">↪</span>
                        Logout
                    </button>
                </form>

            </div>

        </aside>

        <!-- MAIN CONTENT -->

        <main class="main">

            <!-- TOP BAR -->

            <header class="topbar glass">

                <button
                    type="button"
                    class="mobile-toggle"
                    onclick="toggleMenu(true)"
                    aria-label="Open menu">
                    ☰
                </button>

                <div class="breadcrumb">
                    STOCKNEX /
                    <strong>Product Management</strong>
                </div>

                <div class="profile">

                    <span class="avatar">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </span>

                    <span class="name">
                        {{ auth()->user()->name ?? 'Admin' }}
                    </span>

                </div>

            </header>

            <!-- PAGE HEADER -->

            <div class="header">

                <div>
                    <div class="eyebrow">
                        WORKSPACE / INVENTORY
                    </div>

                    <h1>Product Management</h1>

                    <p>
                        Manage your STOCKNEX products with confidence.
                    </p>
                </div>

                <a
                    class="btn"
                    href="{{ route('products.create') }}">
                    ＋ Add New Product
                </a>

            </div>

            <!-- SUCCESS / ERROR MESSAGES -->

            @if(session('success'))
                <div class="alert" role="status">
                    ✓ {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert errors" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- PRODUCT STATISTICS -->

            <div class="stats">

                <div class="stat glass">

                    <div>
                        <div class="stat-label">
                            Total Products
                        </div>

                        <div class="stat-number">
                            {{ $products->count() }}
                        </div>
                    </div>

                    <span class="stat-icon">📦</span>

                </div>

                <div class="stat glass">

                    <div>
                        <div class="stat-label">
                            Inventory Status
                        </div>

                        <div
                            class="stat-number"
                            style="font-size:25px">
                            Active
                        </div>
                    </div>

                    <span class="stat-icon">✓</span>

                </div>

            </div>

            <!-- PRODUCTS TABLE -->

            <section class="panel glass">

                <div class="panel-header">

                    <div>
                        <h2>All Products</h2>

                        <p>
                            Search, edit or remove product records.
                        </p>
                    </div>

                    <input
                        class="search"
                        id="productSearch"
                        type="search"
                        placeholder="🔎 Search products..."
                        aria-label="Search products"
                        oninput="filterProducts()">
                </div>

                <div class="table-wrap">

                    <table>

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Code</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($products as $product)

                                <tr class="product-row">

                                    <td>
                                        {{ $product->id }}
                                    </td>

                                    <td>
                                        <strong>
                                            {{ $product->name }}
                                        </strong>
                                    </td>

                                    <td>
                                        {{ $product->code }}
                                    </td>

                                    <td>
                                        Rs. {{ number_format((float) $product->price, 2) }}
                                    </td>

                                    <td>
                                        {{ $product->quantity }}
                                    </td>

                                    <td>

                                        <div class="actions">

                                            <a
                                                class="edit"
                                                href="{{ route('products.edit', $product->id) }}">
                                                ✎ Edit
                                            </a>

                                            <form
                                                action="{{ route('products.destroy', $product->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Delete this product?')">

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="delete"
                                                    type="submit">
                                                    Delete
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6" class="empty">
                                        No products available yet.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                    <p
                        id="noResults"
                        class="empty"
                        hidden>
                        No matching products found.
                    </p>

                </div>

            </section>

        </main>

    </div>

    <!-- JAVASCRIPT -->

    <script>
        function toggleMenu(open) {
            document
                .getElementById('sidebar')
                .classList.toggle('open', open);

            document
                .getElementById('shade')
                .classList.toggle('show', open);
        }

        function filterProducts() {
            const query = document
                .getElementById('productSearch')
                .value.toLowerCase().trim();

            let shown = 0;

            document
                .querySelectorAll('.product-row')
                .forEach(row => {

                    const match = row
                        .textContent
                        .toLowerCase()
                        .includes(query);

                    row.hidden = !match;

                    if (match) {
                        shown++;
                    }
                });

            document.getElementById('noResults').hidden =
                shown > 0 || query === '';
        }
    </script>

</body>
</html>