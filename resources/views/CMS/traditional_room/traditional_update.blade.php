<style>
    /* Styling from the second form */
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
        /* Ensure form doesn't exceed 600px */
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

    .title span {
        color: var(--font-color-sub);
        font-weight: 600;
        font-size: 17px;
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

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 10px;
        /* Padding added for smaller screens */
    }

    /* Media queries for responsive design */
    @media (max-width: 768px) {
        .form {
            width: 100%;
            /* Take full width on smaller screens */
            max-width: 100%;
            /* Ensure no max width for smaller devices */
            padding: 15px;
        }

        .input {
            font-size: 14px;
        }

        .title {
            font-size: 18px;
        }

        .button-submit,
        .button-back {
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .form {
            padding: 10px;
            /* Smaller padding for mobile */
        }

        .title {
            font-size: 16px;
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

<form class="form" method="POST" action="/CMS/traditional_room/update/{{ $traditional->tradiID }}">
    @method('PATCH')
    @csrf

    <div class="title">
        <p>Update Traditional Room Information</p>
    </div>

    <input type="text" name="tradiName" class="input" value="{{ $traditional->tradiName }}"
        placeholder="Enter traditional room name">
    <input type="text" name="tradiGen" class="input" value="{{ $traditional->tradiGen }}"
        placeholder="Enter generation">
    <input type="text" name="tradiDetail" class="input" value="{{ $traditional->tradiDetail }}"
        placeholder="Enter detail">
    <input type="text" name="tradiImg" class="input" value="{{ $traditional->tradiImg }}" placeholder="Enter image URL">

    <button type="submit" class="button-submit">Submit</button>
    <a class="button-back" href="/CMS/traditional_room/">Back to Homepage</a>
</form>