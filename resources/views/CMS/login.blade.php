<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 350px;
            width: 300px;
            flex-direction: column;
            gap: 35px;
            border-radius: 15px;
            background: #e3e3e3;
            box-shadow: 16px 16px 32px #c8c8c8, -16px -16px 32px #fefefe;
            padding: 40px;
        }

        .login-title {
            color: #000;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            font-weight: bold;
            font-size: x-large;
            margin-top: 1.5em;
        }

        .inputBox {
            position: relative;
            width: 250px;
        }

        .inputBox input {
            width: 100%;
            padding: 10px;
            outline: none;
            border: none;
            color: #000;
            font-size: 1em;
            background: transparent;
            border-left: 2px solid #000;
            border-bottom: 2px solid #000;
            transition: 0.1s;
            border-bottom-left-radius: 8px;
        }

        .inputBox span {
            position: absolute;
            left: 0;
            transform: translateY(-4px);
            margin-left: 10px;
            padding: 10px;
            pointer-events: none;
            font-size: 12px;
            color: #000;
            text-transform: uppercase;
            transition: 0.5s;
            letter-spacing: 3px;
            border-radius: 8px;
        }

        .inputBox input:valid~span,
        .inputBox input:focus~span {
            transform: translateX(113px) translateY(-15px);
            font-size: 0.8em;
            padding: 5px 10px;
            background: #000;
            letter-spacing: 0.2em;
            color: #fff;
            border: 2px;
        }

        .inputBox input:valid,
        .inputBox input:focus {
            border: 2px solid #000;
            border-radius: 8px;
        }

        .login-button {
            height: 45px;
            width: 100px;
            border-radius: 5px;
            border: 2px solid #000;
            cursor: pointer;
            background-color: transparent;
            transition: 0.5s;
            text-transform: uppercase;
            font-size: 10px;
            letter-spacing: 2px;
        }

        .login-button:hover {
            background-color: rgb(0, 0, 0);
            color: white;
        }

        .forgot-password {
            margin-top: 12px;
            font-size: 14px;
            color: #6e8efb;
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: #5a6bfc;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="login-title">Admin Login</h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="inputBox">
                <input type="email" id="email" name="email" required>
                <span>Email</span>
            </div>

            <div class="inputBox">
                <input type="password" id="password" name="password" required>
                <span>Password</span>
            </div>

            <button type="submit" class="login-button">Enter</button>
        </form>
        <a href="#" class="forgot-password">Forgot Password?</a>
    </div>
</body>

</html>