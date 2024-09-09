<style>
    .form {
        --input-focus: #2d8cf0;
        --font-color: #323232;
        --font-color-sub: #666;
        --bg-color: #fff;
        --main-color: #323232;
        padding: 20px;
        background: lightgrey;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
        border-radius: 5px;
        border: 2px solid var(--main-color);
        box-shadow: 4px 4px var(--main-color);
        width: 80%;
        max-width: 600px;
        margin: 50px auto;
    }

    .title {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: Arial, Helvetica, sans-serif;
        color: var(--font-color);
        font-weight: 900;
        font-size: 20px;
        margin-bottom: 25px;
    }

    .input {
        width: 100%;
        height: 40px;
        border-radius: 5px;
        border: 2px solid var(--main-color);
        background-color: var(--bg-color);
        box-shadow: 4px 4px var(--main-color);
        font-size: 15px;
        font-weight: 600;
        color: var(--font-color);
        padding: 5px 10px;
        outline: none;
    }

    .input::placeholder {
        color: var(--font-color-sub);
        opacity: 0.8;
    }

    .input:focus {
        border: 2px solid var(--input-focus);
    }

    .button-submit,
    .button-back {
        width: 100%;
        height: 40px;
        border-radius: 5px;
        border: 2px solid var(--main-color);
        background-color: var(--bg-color);
        box-shadow: 4px 4px var(--main-color);
        font-size: 17px;
        font-weight: 600;
        color: var(--font-color);
        cursor: pointer;
        margin-top: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .button-submit:hover,
    .button-back:hover {
        background-color: var(--input-focus);
        color: white;
    }

    .button-back a {
        color: inherit;
        text-decoration: none;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    @media (max-width: 768px) {
        .form {
            width: 100%;
            max-width: 100%;
            padding: 15px;
        }

        .input {
            font-size: 14px;
        }

        .button-submit,
        .button-back {
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .form {
            padding: 10px;
        }

        .input {
            font-size: 14px;
            padding: 8px;
        }

        .button-submit,
        .button-back {
            font-size: 14px;
            height: 35px;
        }
    }
</style>

<div class="container">
    <form class="form" method="POST" action="/CMS/annual/store">
        @csrf
        <div class="title">
            <p>Form Add New in Annual</p>
        </div>
        <input type="text" name="annualName" placeholder="Enter annual name" class="input" required>
        <input type="text" name="annualTime" placeholder="Enter annual time" class="input" required>
        <input type="text" name="annualImg" placeholder="Enter image URL" class="input" required>
        <button type="submit" class="button-submit">Submit</button>
        <a class="button-back" href="/CMS/annual/">Back to Homepage</a>
    </form>
</div>