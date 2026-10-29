<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>STOCKNEX | Sign In</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- ================= CSS STYLES ================= -->

    <style>

        /* ================= GLOBAL STYLES ================= */

        :root {
            font-family: Inter, 'Segoe UI', sans-serif;
            color: #182b50;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 32px 18px;

            background:
                radial-gradient(circle at 12% 18%, #bddcff 0, transparent 37%),
                radial-gradient(circle at 88% 12%, #dac9ff 0, transparent 40%),
                radial-gradient(circle at 60% 100%, #c7f1f0 0, transparent 43%),
                #f1f5ff;

            font-size: 16px;
        }

        /* ================= BACKGROUND EFFECTS ================= */

        .ambient {
            position: fixed;
            border-radius: 50%;
            filter: blur(3px);
            pointer-events: none;
        }

        .a1 {
            width: 190px;
            height: 190px;
            left: 6%;
            bottom: 9%;
            background: #ffffff70;
        }

        .a2 {
            width: 260px;
            height: 260px;
            right: 4%;
            top: 9%;
            background: #ffffff58;
        }

        /* ================= LOGIN CONTAINER ================= */

        .shell {
            position: relative;
            width: min(100%, 980px);
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow: hidden;

            border: 1.5px solid #ffffffed;
            border-radius: 32px;
            background: #ffffff75;

            backdrop-filter: blur(32px) saturate(165%);
            -webkit-backdrop-filter: blur(32px) saturate(165%);

            box-shadow:
                0 28px 85px #405f9b2b,
                inset 0 1px 0 #fff;
        }

        /* ================= BRAND SECTION ================= */

        .brand {
            padding: 65px 48px;
            background: linear-gradient(150deg, #4568dfe6, #7765d9d6);
            color: white;
            position: relative;
            overflow: hidden;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            min-height: 530px;
        }

        .brand:before {
            content: '';
            position: absolute;
            width: 360px;
            height: 360px;
            top: -180px;
            right: -130px;
            border-radius: 50%;
            border: 60px solid #ffffff25;
        }

        .brand:after {
            content: '';
            position: absolute;
            width: 270px;
            height: 270px;
            bottom: -155px;
            left: -110px;
            border-radius: 50%;
            border: 45px solid #ffffff1e;
        }

        .mark {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -.7px;
            z-index: 1;
        }

        .mark-icon {
            display: grid;
            place-items: center;

            width: 45px;
            height: 45px;

            border-radius: 15px;
            background: #ffffff35;
            border: 1px solid #ffffff75;

            box-shadow: inset 0 1px 0 #fff8;
            font-size: 22px;
        }

        .brand-copy {
            z-index: 1;
        }

        .brand-copy h1 {
            font-size: clamp(30px, 3.3vw, 42px);
            line-height: 1.15;
            letter-spacing: -1.7px;
            margin: 0 0 20px;
        }

        .brand-copy p {
            font-size: 17px;
            line-height: 1.8;
            color: #f4f4ff;
            margin: 0;
        }

        .brand-foot {
            font-size: 13px;
            color: #f0edff;
            z-index: 1;
        }

        /* ================= LOGIN FORM SECTION ================= */

        .form-side {
            padding: 65px 48px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .tag {
            display: inline-flex;
            align-self: flex-start;

            background: #e8edff;
            border: 1px solid #d9e2ff;
            color: #405bd0;

            border-radius: 999px;
            padding: 8px 13px;

            font-size: 12px;
            font-weight: 800;
            letter-spacing: .7px;
        }

        .form-side h2 {
            font-size: 34px;
            letter-spacing: -1.3px;
            margin: 21px 0 8px;
        }

        .subtitle {
            color: #657590;
            font-size: 16px;
            margin: 0 0 33px;
            line-height: 1.6;
        }

        /* ================= FORM FIELDS ================= */

        label {
            display: block;
            font-weight: 700;
            font-size: 15px;
            margin: 0 0 10px;
        }

        .field {
            margin-bottom: 22px;
        }

        input {
            width: 100%;
            border: 1.5px solid #d6dff1;
            background: #ffffffcf;
            border-radius: 15px;

            padding: 16px 17px;
            font: inherit;
            color: #182b50;

            outline: none;

            transition:
                border .2s,
                box-shadow .2s,
                transform .2s;
        }

        input:focus {
            border-color: #6d80e7;
            box-shadow: 0 0 0 4px #6c83e52a;
            background: white;
        }

        input::placeholder {
            color: #9ba8bf;
        }

        /* ================= PASSWORD FIELD ================= */

        .pass-wrap {
            position: relative;
        }

        .pass-wrap input {
            padding-right: 77px;
        }

        .show {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);

            border: 0;
            background: #edf0ff;
            color: #475ab8;

            border-radius: 10px;
            padding: 9px 12px;

            font-weight: 700;
            cursor: pointer;
        }

        /* ================= SIGN IN BUTTON ================= */

        .submit {
            width: 100%;
            border: 1px solid #ffffffa0;
            border-radius: 16px;

            padding: 17px;

            background: linear-gradient(130deg, #456ce3, #7963dd);
            color: white;

            font: 700 16px Inter, 'Segoe UI', sans-serif;
            cursor: pointer;

            box-shadow: 0 12px 24px #4b67cc45;

            transition:
                transform .25s,
                box-shadow .25s,
                filter .25s;
        }

        .submit:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 20px 35px #4b67cc60;
            filter: brightness(1.07);
        }

        .submit:active {
            transform: scale(.99);
        }

        /* ================= FOOTER NOTE ================= */

        .note {
            text-align: center;
            color: #71809b;
            font-size: 13px;
            margin-top: 22px;
        }

        /* ================= ERROR MESSAGES ================= */

        .errors {
            border: 1px solid #fecaca;
            background: #fff0f0;
            color: #a32929;

            padding: 12px 15px;
            border-radius: 12px;
            margin-bottom: 20px;

            font-size: 14px;
        }

        .errors ul {
            margin: 0;
            padding-left: 18px;
        }

        /* ================= ACCESSIBILITY ================= */

        button:focus-visible,
        input:focus-visible {
            outline: 3px solid #9caafa;
            outline-offset: 3px;
        }

        /* ================= RESPONSIVE DESIGN ================= */

        @media (max-width: 760px) {

            .shell {
                grid-template-columns: 1fr;
                max-width: 540px;
            }

            .brand {
                min-height: 190px;
                padding: 28px;
            }

            .brand-copy h1 {
                font-size: 25px;
                margin: 18px 0 8px;
            }

            .brand-copy p {
                font-size: 14px;
            }

            .brand-foot {
                display: none;
            }

            .form-side {
                padding: 34px 28px 38px;
            }

            .form-side h2 {
                font-size: 30px;
            }

        }

        @media (prefers-reduced-motion: reduce) {

            .submit,
            input {
                transition: none;
            }

        }

        @media (prefers-reduced-transparency: reduce) {

            .shell {
                background: #fff;
            }

        }

    </style>

    <!-- External CSS -->
    <link
        rel="stylesheet"
        href="{{ asset('css/stocknex-aurora-pages.css') }}"
    >

</head>

<body>

    <!-- ================= BACKGROUND EFFECTS ================= -->

    <div class="ambient a1"></div>
    <div class="ambient a2"></div>


    <!-- ================= LOGIN CONTAINER ================= -->

    <main class="shell">

        <!-- ================= BRAND SECTION ================= -->

        <section class="brand" aria-label="STOCKNEX introduction">

            <!-- Logo -->
            <div class="mark">

                <span class="mark-icon">◈</span>

                STOCKNEX

            </div>


            <!-- Brand Description -->
            <div class="brand-copy">

                <h1>
                    Everything in<br>
                    one beautiful place.
                </h1>

                <p>
                    Manage your inventory, customers and team
                    with clarity and confidence.
                </p>

            </div>


            <!-- Brand Footer -->
            <div class="brand-foot">
                Smart inventory management • Secure access
            </div>

        </section>


        <!-- ================= LOGIN FORM SECTION ================= -->

        <section class="form-side">

            <span class="tag">
                WELCOME BACK
            </span>

            <h2>Sign in to STOCKNEX</h2>

            <p class="subtitle">
                Enter your details to access your workspace.
            </p>


            <!-- ================= ERROR MESSAGES ================= -->

            @if ($errors->any())

                <div class="errors" role="alert">

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- ================= LOGIN FORM ================= -->

            <form method="POST" action="{{ route('login') }}">

                @csrf


                <!-- Email Address -->
                <div class="field">

                    <label for="email">
                        Email address
                    </label>

                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        placeholder="you@example.com"
                        autocomplete="username"
                        required
                        autofocus
                    >

                </div>


                <!-- Password -->
                <div class="field">

                    <label for="password">
                        Password
                    </label>

                    <div class="pass-wrap">

                        <input
                            id="password"
                            name="password"
                            type="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            class="show"
                            type="button"
                            id="togglePassword"
                            aria-label="Show password"
                        >
                            Show
                        </button>

                    </div>

                </div>


                <!-- Sign In Button -->
                <button class="submit" type="submit">
                    Sign in →
                </button>

            </form>


            <!-- Security Note -->
            <div class="note">
                Authorized users only · Your account is protected
            </div>

        </section>

    </main>


    <!-- ================= JAVASCRIPT ================= -->

    <script>

        // Password Show / Hide Function

        const toggle = document.getElementById('togglePassword');

        const password = document.getElementById('password');


        toggle.addEventListener('click', () => {

            const show = password.type === 'password';

            password.type = show ? 'text' : 'password';

            toggle.textContent = show ? 'Hide' : 'Show';

            toggle.setAttribute(
                'aria-label',
                show ? 'Hide password' : 'Show password'
            );

        });

    </script>

</body>

</html>
