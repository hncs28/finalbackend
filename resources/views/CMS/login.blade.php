<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: whitesmoke;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            background-color: white;
            padding: 2.5em;
            border-radius: 25px;
            transition: .4s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 1px 2px 2px;
        }

        .form:hover {
            transform: translateX(-0.5em) translateY(-0.5em);
            border: 1px solid #171717;
            box-shadow: 10px 10px 0px #666666;
        }

        .heading {
            color: black;
            padding-bottom: 2em;
            text-align: center;
            font-weight: bold;
        }

        .input {
            border-radius: 5px;
            border: 1px solid whitesmoke;
            background-color: whitesmoke;
            outline: none;
            padding: 0.7em;
            transition: .4s ease-in-out;
        }

        .input:hover {
            box-shadow: 6px 6px 0px #969696,
                -3px -3px 10px #ffffff;
        }

        .input:focus {
            background: #ffffff;
            box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.3);
        }

        .password-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .password-container input {
            flex: 1;
            padding-right: 40px;
        }

        .password-container .toggle-password {
            position: absolute;
            right: 10px;
            cursor: pointer;
            font-size: 1.2em;
            color: #666;
        }

        .form .btn {
            margin-top: 2em;
            align-self: center;
            padding: 0.7em;
            padding-left: 1em;
            padding-right: 1em;
            border-radius: 10px;
            border: none;
            color: black;
            transition: .4s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 1px;
        }

        .form .btn:hover {
            box-shadow: 6px 6px 0px #969696,
                -3px -3px 10px #ffffff;
            transform: translateX(-0.5em) translateY(-0.5em);
        }

        .form .btn:active {
            transition: .2s;
            transform: translateX(0em) translateY(0em);
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="form" action="{{ route('login') }}" method="POST">
            @csrf <!-- CSRF token for Laravel -->
            <p class="heading">Admin Login</p>
            <!-- Email field with name attribute -->
            <input class="input" name="email" placeholder="Email" type="email" required>

            <!-- Password field with show/hide icon -->
            <div class="password-container">
                <input class="input" id="password" name="password" placeholder="Password" type="password" required>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>

            <!-- Submit button -->
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const icon = document.querySelector('.toggle-password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.textContent = '🙈'; // Change icon to "hide"
            } else {
                passwordField.type = 'password';
                icon.textContent = '👁️'; // Change icon to "show"
            }
        }
    </script>
</body>

</html>