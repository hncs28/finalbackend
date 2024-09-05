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

        .login-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 360px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 0, 0, 0.1) 10%, transparent 50%);
            transform: translateX(-50%);
            z-index: 0;
        }

        .login-container h2 {
            margin-top: 0;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 1;
        }

        .login-container label {
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
            text-align: left;
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .login-container input[type="email"]:focus,
        .login-container input[type="password"]:focus {
            border-color: #6e8efb;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(110, 143, 251, 0.25);
        }

        .login-container button {
            background-color: #6e8efb;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            position: relative;
            z-index: 1;
        }

        .login-container button:hover {
            background-color: #5a6bfc;
            transform: translateY(-2px);
        }

        .login-container button:active {
            background-color: #4a5cda;
            transform: translateY(0);
        }

        .login-container .forgot-password {
            margin-top: 12px;
            font-size: 14px;
            color: #6e8efb;
            text-decoration: none;
            display: block;
            transition: color 0.3s;
        }

        .login-container .forgot-password:hover {
            color: #5a6bfc;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
