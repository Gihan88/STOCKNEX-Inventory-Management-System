<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>STOCKNEX | Customer Management</title>

    <style>
        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font: 16px/1.55 'Segoe UI', Arial, sans-serif;
            color: #1b2b50;
            background:
                radial-gradient(circle at 15% 5%, #cbd9ff, transparent 42%),
                radial-gradient(circle at 95% 20%, #e3d7ff, transparent 40%),
                radial-gradient(circle at 70% 100%, #c9f1f1, transparent 45%),
                #edf3ff;
            min-height: 100vh
        }

        a {
            text-decoration: none
        }

        button,
        input {
            font: inherit
        }

        .layout {
            display: grid;
            grid-template-columns: 250px minmax(0, 1fr);
            gap: 20px;
            min-height: 100vh;
            padding: 20px
        }

        .glass {
            background: rgba(255, 255, 255, .66);
            border: 1px solid #fff;
            border-radius: 24px;
            box-shadow: 0 15px 38px #304d8421;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px)
        }

        .sidebar {
            padding: 22px 15px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 20px;
            height: calc(100vh - 40px)
        }

        .brand {
            display: flex;
            gap: 12px;
            align-items: center;
            padding: 6px 9px 24px;
            border-bottom: 1px solid #cbd7ef;
            color: #1b2b50
        }

        .mark {
            display: grid;
            place-items: center;
            width: 44px;
            height: 44px;
            border-radius: 14px;
            color: white;
            background: linear-gradient(135deg, #4b72ed, #8465e8);
            font-size: 23px;
            font-weight: 800
        }

        .brand strong {
            display: block;
            font-size: 20px
        }

        .brand small {
            display: block;
            font-size: 12px;
            color: #637391
        }

        .label {
            font-size: 12px;
            font-weight: 800;
            color: #6c7d9b;
            letter-spacing: 1.1px;
            margin: 23px 12px 10px
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 14px;
            border-radius: 13px;
            margin: 3px 0;
            color: #2c3e65;
            font-size: 15px;
            font-weight: 650;
            transition: .2s
        }

        .nav:hover {
            background: #e6ebff;
            transform: translateY(-2px)
        }

        .nav.active {
            color: #fff;
            background: linear-gradient(110deg, #5877e9, #8067e6);
            box-shadow: 0 8px 18px #576ad64a
        }

        .nav .icon {
            width: 22px;
            text-align: center
        }

        .bottom {
            margin-top: auto;
            border-top: 1px solid #cbd7ef;
            padding-top: 12px
        }

        .bottom form {
            margin: 0
        }

        .logout {
            border: 0;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            color: #b43458
        }

        .main {
            min-width: 0
        }

        .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 22px;
            gap: 12px;
            margin-bottom: 25px;
            color: #405475
        }

        .top strong {
            color: #1c3057
        }

        .account {
            font-weight: 700
        }

        .heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin: 0 2px 24px;
            flex-wrap: wrap
        }

        .eyebrow {
            color: #596bdf;
            font-size: 12px;
            letter-spacing: 1.2px;
            font-weight: 800
        }

        .heading h1 {
            font-size: clamp(29px, 3vw, 40px);
            letter-spacing: -1px;
            line-height: 1.2;
            margin: 7px 0
        }

        .muted {
            color: #5b6d8c;
            margin: 0
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 17px;
            min-height: 44px;
            border: 0;
            border-radius: 12px;
            color: white;
            background: linear-gradient(120deg, #4e70e7, #7965e2);
            font-weight: 700;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 8px 19px #5b6cce40;
            transition: .2s;
            white-space: nowrap
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px #5b6cce5b
        }

        .btn.edit {
            background: #e4ecff;
            color: #2d52ae;
            box-shadow: none
        }

        .btn.delete {
            background: #ffe4eb;
            color: #a72e4f;
            box-shadow: none
        }

        .panel {
            padding: 25px
        }

        .panel-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap
        }

        .panel h2 {
            margin: 0 0 4px;
            font-size: 23px
        }

        .search {
            border: 1px solid #c8d5f5;
            background: #fff;
            border-radius: 12px;
            padding: 12px 14px;
            min-height: 45px;
            width: min(100%, 310px);
            outline: none;
            color: #1b2b50
        }

        .search:focus {
            border-color: #6e79eb;
            box-shadow: 0 0 0 3px #6e79eb22
        }

        .table-scroll {
            overflow-x: auto;
            margin-top: 23px
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 750px
        }

        th {
            text-align: left;
            background: #e8eeff;
            color: #405577;
            padding: 15px;
            font-size: 20px;
            letter-spacing: .4px;
            text-transform: uppercase
        }

        th:first-child {
            border-radius: 12px 0 0 12px
        }

        th:last-child {
            border-radius: 0 12px 12px 0
        }

        td {
            padding: 16px 15px;
            border-bottom: 1px solid #dce4f4;
            color: #26395f;
            font-size: 20px;
            vertical-align: middle
        }

        tbody tr:hover {
            background: #ffffff8a
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 8px
        }

        .actions form {
            margin: 0
        }

        .notice {
            background: #e0faed;
            color: #176446;
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 18px;
            font-weight: 650
        }

        .error {
            background: #ffe8ec;
            color: #92314c
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #657795
        }

        .menu {
            display: none;
            background: #e9edff;
            border: 0;
            border-radius: 10px;
            padding: 8px 12px;
            cursor: pointer
        }

        .shade {
            display: none
        }

        @media(max-width:850px) {
            .layout {
                display: block;
                padding: 12px
            }

            .sidebar {
                position: fixed;
                left: 0;
                top: 0;
                height: 100vh;
                width: min(280px, 85vw);
                z-index: 20;
                transform: translateX(-110%);
                transition: transform .2s;
                border-radius: 0 24px 24px 0
            }

            .sidebar.open {
                transform: translateX(0)
            }

            .shade.show {
                display: block;
                position: fixed;
                inset: 0;
                background: #18234588;
                z-index: 10
            }

            .menu {
                display: inline-block
            }

            .panel {
                padding: 17px
            }

            .top {
                padding: 13px
            }

            .heading {
                margin-top: 20px
            }
        }

        @media(prefers-reduced-motion:reduce) {

            *,
            *:before,
            *:after {
                transition: none !important
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

        <!-- Sidebar -->
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

            <a class="nav active" href="{{ route('customers.index') }}">
                <span class="icon">♧</span>
                Customer Management
            </a>

            <a class="nav" href="{{ route('products.index') }}">
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

                    <button class="nav logout" type="submit">
                        <span class="icon">↪</span>
                        Logout
                    </button>
                </form>

            </div>
        </aside>

        <!-- Main Content -->
        <main class="main">

            <!-- Top Bar -->
            <header class="top glass">

                <div>
                    <button
                        class="menu"
                        type="button"
                        onclick="toggleMenu(true)">
                        ☰
                    </button>

                    STOCKNEX /
                    <strong>Customer Management</strong>
                </div>

                <span class="account">
                    {{ auth()->user()->name }}
                </span>

            </header>

            <!-- Page Heading -->
            <div class="heading">

                <div>
                    <div class="eyebrow">
                        WORKSPACE / CUSTOMERS
                    </div>

                    <h1>Customer Management</h1>

                    <p class="muted">
                        Manage your customers in one beautiful place.
                    </p>
                </div>

                <a
                    href="{{ route('customers.create') }}"
                    class="btn">
                    ＋ Add New Customer
                </a>

            </div>

            <!-- Messages -->
            @if(session('success'))
                <div class="notice">
                    ✓ {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="notice error">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- Customer Table -->
            <section class="panel glass">

                <div class="panel-head">

                    <div>
                        <h2>All Customers</h2>

                        <p class="muted">
                            Search, edit or remove customer records.
                        </p>
                    </div>

                    <input
                        class="search"
                        id="customerSearch"
                        type="search"
                        placeholder="Search customers..."
                        aria-label="Search customers">

                </div>

                <div class="table-scroll">

                    <table>

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($customers as $customer)

                                <tr class="customer-row">

                                    <td>
                                        {{ $customer->id }}
                                    </td>

                                    <td>
                                        <strong>{{ $customer->name }}</strong>
                                    </td>

                                    <td>
                                        {{ $customer->email }}
                                    </td>

                                    <td>
                                        {{ $customer->phone }}
                                    </td>

                                    <td>
                                        {{ $customer->address }}
                                    </td>

                                    <td>
                                        <div class="actions">

                                            <a
                                                class="btn edit"
                                                href="{{ route('customers.edit', $customer->id) }}">
                                                Edit
                                            </a>

                                            <form
                                                action="{{ route('customers.destroy', $customer->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Delete this customer?')">

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="btn delete"
                                                    type="submit">
                                                    Delete
                                                </button>

                                            </form>

                                        </div>
                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td class="empty" colspan="6">
                                        No customers available yet.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>
                    </table>

                    <p class="empty" id="noMatches" hidden>
                        No matching customers.
                    </p>

                </div>
            </section>

        </main>
    </div>

    <script>
        function toggleMenu(open) {
            document.getElementById('sidebar')
                .classList.toggle('open', open);

            document.getElementById('shade')
                .classList.toggle('show', open);
        }

        document.getElementById('customerSearch')
            .addEventListener('input', function () {

                let count = 0;

                document.querySelectorAll('.customer-row')
                    .forEach(row => {

                        const match = row.textContent
                            .toLowerCase()
                            .includes(this.value.trim().toLowerCase());

                        row.hidden = !match;

                        if (match) {
                            count++;
                        }
                    });

                document.getElementById('noMatches').hidden =
                    count !== 0 || !this.value.trim();
            });
    </script>

</body>
</html>
