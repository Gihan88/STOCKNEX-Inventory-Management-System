<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Settings | STOCKNEX</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- CSS Styles -->
    <style>

        :root {
            --ink: #17264a;
            --muted: #5b6c8b;
            --blue: #465ee3;
            --line: #dce5fb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font: 16px/1.6 Inter, 'Segoe UI', Arial, sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at 18% 15%, #c9dfff, transparent 38%),
                radial-gradient(circle at 90% 22%, #e5d8ff, transparent 42%),
                #f1f6ff;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button,
        input {
            font: inherit;
        }

        button {
            cursor: pointer;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            position: fixed;
            inset: 0 auto 0 0;
            width: 270px;
            padding: 28px 16px;
            display: flex;
            flex-direction: column;
            background: linear-gradient(165deg, #183d7d, #1b2353);
            color: white;
            z-index: 5;
            box-shadow: 10px 0 40px #263d6d1b;
        }

        .brand {
            font-size: 25px;
            font-weight: 800;
            padding: 0 12px 24px;
            border-bottom: 1px solid #ffffff3d;
        }

        .brand small {
            display: block;
            font-size: 12px;
            color: #c6d9ff;
            font-weight: 500;
        }

        .nav-title {
            font-size: 12px;
            letter-spacing: 1.6px;
            color: #b8cfff;
            margin: 26px 12px 10px;
            font-weight: 800;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 13px;
            min-height: 55px;
            padding: 13px 15px;
            border-radius: 17px;
            margin: 3px 0;
            color: #f0f5ff;
            font-size: 16px;
            font-weight: 600;
            transition:
                transform .2s,
                background .2s,
                box-shadow .2s;
        }

        .nav:hover,
        .nav:focus-visible {
            transform: translateY(-3px) scale(1.025);
            background: #ffffff30;
            box-shadow: 0 9px 24px #07153340;
        }

        .nav.active {
            background: #ffffff38;
            border: 1px solid #ffffff50;
        }

        .logout {
            margin-top: auto;
        }

        .logout button {
            width: 100%;
            text-align: left;
            border: 0;
            background: #ffffff18;
        }

        /* ================= MAIN CONTENT ================= */

        .main {
            margin-left: 270px;
            padding: 28px clamp(20px, 4vw, 62px) 65px;
            max-width: 1700px;
        }

        .topbar,
        .glass {
            background: rgba(255, 255, 255, .78);
            border: 1px solid #fff;
            border-radius: 25px;
            box-shadow:
                0 15px 45px #3b5b9b19,
                inset 0 1px 0 #fff;
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            padding: 18px 25px;
        }

        .topbar strong {
            font-size: 18px;
        }

        .account {
            color: #40577c;
            font-weight: 700;
        }

        .content {
            max-width: 1160px;
            margin: 34px auto;
        }

        .eyebrow {
            font-size: 13px;
            font-weight: 800;
            color: #5167d9;
            letter-spacing: 1.4px;
            text-transform: uppercase;
        }

        .heading {
            font-size: clamp(30px, 3vw, 40px);
            letter-spacing: -1.2px;
            margin: 7px 0;
        }

        .subtitle {
            color: var(--muted);
            font-size: 16px;
            margin: 0 0 27px;
        }

        /* ================= SETTINGS CARDS ================= */

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 23px;
            align-items: start;
        }

        .glass {
            padding: 30px;
            transition:
                transform .2s,
                box-shadow .2s;
        }

        .glass:hover {
            transform: translateY(-3px);
            box-shadow: 0 21px 50px #3b5b9b26;
        }

        .icon {
            display: inline-grid;
            place-items: center;
            width: 55px;
            height: 55px;
            border-radius: 18px;
            background: #e5ebff;
            font-size: 25px;
            margin-bottom: 13px;
        }

        .glass h2 {
            font-size: 23px;
            margin: 0 0 6px;
        }

        .description {
            color: var(--muted);
            margin: 0 0 24px;
            font-size: 15px;
        }

        /* ================= FORM FIELDS ================= */

        .field {
            margin-bottom: 19px;
        }

        .field label {
            display: block;
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .field input {
            width: 100%;
            min-height: 52px;
            padding: 13px 15px;
            border: 1.5px solid #cbd7f2;
            background: #ffffffed;
            border-radius: 14px;
            color: var(--ink);
            outline: none;
        }

        .field input:focus {
            border-color: #6679eb;
            box-shadow: 0 0 0 4px #687cff23;
        }

        /* ================= BUTTONS ================= */

        .btn {
            background: linear-gradient(120deg, #405de3, #7468df);
            border: 1px solid #ffffff66;
            border-radius: 15px;
            color: #fff;
            padding: 13px 20px;
            min-height: 50px;
            font-weight: 800;
            box-shadow: 0 10px 24px #5365c73b;
            transition:
                transform .2s,
                box-shadow .2s;
        }

        .btn:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 16px 30px #5365c75c;
        }

        /* ================= ALERT MESSAGES ================= */

        .alert {
            padding: 14px 17px;
            border-radius: 14px;
            margin: 0 0 22px;
            font-weight: 600;
        }

        .success {
            background: #dcfaec;
            color: #116342;
            border: 1px solid #a7e6c6;
        }

        .error {
            background: #ffebee;
            color: #9d253c;
            border: 1px solid #ffc5cf;
        }

        .error ul {
            margin: 7px 0 0;
            padding-left: 22px;
        }

        .menu-toggle,
        .shade {
            display: none;
        }

        a:focus-visible,
        button:focus-visible {
            outline: 3px solid #8aa1ff;
            outline-offset: 3px;
        }

        /* ================= RESPONSIVE DESIGN ================= */

        @media (max-width: 1100px) {

            .grid {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 760px) {

            .sidebar {
                transform: translateX(-100%);
                transition: transform .2s;
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main {
                margin-left: 0;
                padding: 14px 14px 40px;
            }

            .menu-toggle {
                display: inline-block;
                border: 0;
                background: #e4eaff;
                border-radius: 10px;
                padding: 9px 13px;
                font-weight: 800;
                color: #243d8a;
            }

            .shade.show {
                display: block;
                position: fixed;
                inset: 0;
                background: #14204a99;
                z-index: 4;
            }

            .glass {
                padding: 23px;
            }

            .account {
                font-size: 13px;
            }

        }

        @media (prefers-reduced-motion: reduce) {

            .nav,
            .glass,
            .btn,
            .sidebar {
                transition: none !important;
            }

        }

    </style>

    <link
        rel="stylesheet"
        href="{{ asset('css/stocknex-aurora-pages.css') }}"
    >

</head>

<body>

    <!-- ================= MOBILE OVERLAY ================= -->

    <div
        class="shade"
        id="shade"
        onclick="toggleMenu(false)">
    </div>


    <!-- ================= SIDEBAR ================= -->

    <aside class="sidebar" id="sidebar">

        <!-- Brand -->
        <a href="{{ route('dashboard') }}" class="brand">
            ◈ STOCKNEX
            <small>Inventory Management</small>
        </a>


        <!-- Main Menu -->
        <div class="nav-title">MAIN MENU</div>

        <a class="nav" href="{{ route('dashboard') }}">
            ▦ &nbsp; Dashboard
        </a>

        <a class="nav" href="{{ route('users.index') }}">
            ♙ &nbsp; User Management
        </a>

        <a class="nav" href="{{ route('customers.index') }}">
            ♧ &nbsp; Customer Management
        </a>

        <a class="nav" href="{{ route('products.index') }}">
            ▤ &nbsp; Product Management
        </a>


        <!-- System Menu -->
        <div class="nav-title">SYSTEM</div>

        <a class="nav active" href="{{ route('settings.index') }}">
            ⚙ &nbsp; Settings
        </a>


        <!-- Logout -->
        <form
            class="logout"
            method="POST"
            action="{{ route('logout') }}"
        >
            @csrf

            <button class="nav" type="submit">
                ↪ &nbsp; Logout
            </button>

        </form>

    </aside>


    <!-- ================= MAIN CONTENT ================= -->

    <main class="main">

        <!-- Top Navigation -->
        <header class="topbar">

            <div>

                <button
                    class="menu-toggle"
                    type="button"
                    onclick="toggleMenu(true)"
                >
                    ☰ Menu
                </button>

                <strong>STOCKNEX / Settings</strong>

            </div>

            <span class="account">
                👤 {{ auth()->user()->name }}
            </span>

        </header>


        <!-- ================= SETTINGS CONTENT ================= -->

        <div class="content">

            <!-- Page Heading -->
            <div class="eyebrow">
                Account preferences
            </div>

            <h1 class="heading">Account Settings</h1>

            <p class="subtitle">
                Manage your profile and keep your account secure.
            </p>


            <!-- ================= SUCCESS MESSAGE ================= -->

            @if(session('success'))

                <div class="alert success" role="status">
                    ✓ {{ session('success') }}
                </div>

            @endif


            <!-- ================= ERROR MESSAGES ================= -->

            @if($errors->any())

                <div class="alert error" role="alert">

                    <strong>Please check the following:</strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- ================= SETTINGS GRID ================= -->

            <div class="grid">

                <!-- ================= PERSONAL INFORMATION ================= -->

                <section class="glass">

                    <div class="icon">👤</div>

                    <h2>Personal Information</h2>

                    <p class="description">
                        Update your name and email address.
                    </p>


                    <!-- Profile Update Form -->
                    <form
                        method="POST"
                        action="{{ route('settings.profile') }}"
                    >

                        @csrf
                        @method('PUT')


                        <!-- Full Name -->
                        <div class="field">

                            <label for="name">
                                Full Name
                            </label>

                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name', auth()->user()->name) }}"
                                autocomplete="name"
                                required
                            >

                        </div>


                        <!-- Email Address -->
                        <div class="field">

                            <label for="email">
                                Email Address
                            </label>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email', auth()->user()->email) }}"
                                autocomplete="email"
                                required
                            >

                        </div>


                        <!-- Save Profile Button -->
                        <button class="btn" type="submit">
                            ✓ Save Profile
                        </button>

                    </form>

                </section>


                <!-- ================= SECURITY & PASSWORD ================= -->

                <section class="glass">

                    <div class="icon">🔒</div>

                    <h2>Security & Password</h2>

                    <p class="description">
                        Choose a strong password with at least 8 characters.
                    </p>


                    <!-- Password Update Form -->
                    <form
                        method="POST"
                        action="{{ route('settings.password') }}"
                    >

                        @csrf
                        @method('PUT')


                        <!-- Current Password -->
                        <div class="field">

                            <label for="current_password">
                                Current Password
                            </label>

                            <input
                                id="current_password"
                                name="current_password"
                                type="password"
                                autocomplete="current-password"
                                required
                            >

                        </div>


                        <!-- New Password -->
                        <div class="field">

                            <label for="password">
                                New Password
                            </label>

                            <input
                                id="password"
                                name="password"
                                type="password"
                                minlength="8"
                                autocomplete="new-password"
                                required
                            >

                        </div>


                        <!-- Confirm New Password -->
                        <div class="field">

                            <label for="password_confirmation">
                                Confirm New Password
                            </label>

                            <input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                minlength="8"
                                autocomplete="new-password"
                                required
                            >

                        </div>


                        <!-- Update Password Button -->
                        <button class="btn" type="submit">
                            🔒 Update Password
                        </button>

                    </form>

                </section>

            </div>

        </div>

    </main>


    <!-- ================= JAVASCRIPT ================= -->

    <script>

        // Mobile Sidebar Open / Close
        function toggleMenu(open) {

            document
                .getElementById('sidebar')
                .classList.toggle('open', open);

            document
                .getElementById('shade')
                .classList.toggle('show', open);

        }

    </script>

</body>

</html>
