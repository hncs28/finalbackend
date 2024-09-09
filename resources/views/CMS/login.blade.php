<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* From Uiverse.io by JkHuger */
        .singup {
            color: #000;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            font-weight: bold;
            font-size: x-large;
            margin-top: 1.5em;
        }

        .card {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 350px;
            width: 300px;
            flex-direction: column;
            gap: 35px;
            border-radius: 15px;
            background: #e3e3e3;
            box-shadow: 16px 16px 32px #c8c8c8,
                -16px -16px 32px #fefefe;
            border-radius: 8px;
        }

        .inputBox,
        .inputBox1 {
            position: relative;
            width: 250px;
        }

        .inputBox input,
        .inputBox1 input {
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

        .inputBox span,
        .inputBox1 span {
            margin-top: 5px;
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

        .inputBox1 input:valid~span,
        .inputBox1 input:focus~span {
            transform: translateX(156px) translateY(-15px);
            font-size: 0.8em;
            padding: 5px 10px;
            background: #000;
            letter-spacing: 0.2em;
            color: #fff;
            border: 2px;
        }

        .inputBox input:valid,
        .inputBox input:focus,
        .inputBox1 input:valid,
        .inputBox1 input:focus {
            border: 2px solid #000;
            border-radius: 8px;
        }

        .enter {
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
            margin-bottom: 3em;
        }

        .enter:hover {
            background-color: rgb(0, 0, 0);
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <a class="singup">Admin login</a>

            <!-- Form starts here -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Email input -->
                <div class="inputBox1">
                    <input type="email" name="email" required="required">
                    <span class="user">Email</span>
                </div>

                <!-- Password input -->
                <div class="inputBox">
                    <input type="password" name="password" required="required">
                    <span>Password</span>
                </div>

                <!-- Submit button -->
                <button type="submit" class="enter">Enter</button>
            </form>
            <!-- Form ends here -->

        </div>
    </div>
</body>

</html>