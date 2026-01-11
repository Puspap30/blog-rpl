<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin | Blog RPL</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;

            /* GRADASI HALUS */
            background: linear-gradient(
                120deg,
                #0f2027,
                #203a43,
                #2c5364,
                #5f2c82,
                #49a09d
            );

            background-size: 400% 400%;
            animation: smoothGradient 12s ease infinite;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes smoothGradient {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .login-box {
            background: rgba(255,255,255,0.18);
            backdrop-filter: blur(12px);
            width: 380px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.35);
            animation: slideFade 0.9s ease;
            color: white;
            text-align: center;
        }

        @keyframes slideFade {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            width: 85px;
            margin-bottom: 15px;
        }

        h2 {
            margin: 5px 0;
            font-size: 26px;
            letter-spacing: 1px;
        }

        p {
            font-size: 14px;
            opacity: 0.9;
            margin-bottom: 25px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            border-radius: 10px;
            border: none;
            outline: none;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 22px;
            border: none;
            border-radius: 10px;

            /* GRADASI TOMBOL */
            background: linear-gradient(135deg, #36d1dc, #5b86e5);

            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.4);
        }

        .error {
            background: rgba(248,215,218,0.9);
            color: #842029;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            font-size: 14px;
        }

        footer {
            position: fixed;
            bottom: 10px;
            font-size: 12px;
            color: white;
            opacity: 0.75;
        }
    </style>
</head>

<body>

<div class="login-box">

    <!-- LOGO SEKOLAH -->
    <img src="{{ asset('images/logo-smk.png') }}" class="logo" alt="Logo SMK">

    <h2>Login Admin</h2>
    <p>Blog RPL SMK Muhammadiyah Tasikmalaya</p>

    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Masuk</button>
    </form>

</div>

<footer>
    © {{ date('Y') }} Blog RPL
</footer>

</body>
</html>
