<style>
    /* Styling from the second form */
    .form {
        --input-focus: #4CAF50;
        /* Xanh lá nhạt cho viền khi focus */
        --font-color: #333;
        /* Màu xám đậm cho văn bản */
        --font-color-sub: #777;
        /* Màu xám nhẹ cho phụ đề */
        --bg-color: #f9f9f9;
        /* Màu nền rất nhạt */
        --main-color: #4CAF50;
        /* Xanh lá nhạt cho viền và box shadow */
        padding: 20px;
        background: #fff;
        /* Nền trắng cho form */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
        border-radius: 10px;
        border: 1px solid var(--main-color);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Màu đổ bóng mềm mại */
        width: 80%;
        max-width: 600px;
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
<div class="container">
    <form class="form" method="POST" action="/CMS/projects/update/{{ $project->projectID }}">
        @method('PATCH')
        @csrf
        <div class="title">
            <p>Update Project Information</p>
        </div>

        <input type="text" name="projectName" class="input" value="{{ $project->projectName }}"
            placeholder="Enter project name" required>
        <input type="text" name="projectLink" class="input" value="{{ $project->projectLink }}"
            placeholder="Enter project link" required>
        <input type="text" name="projectImg" class="input" value="{{ $project->projectImg }}"
            placeholder="Enter project image URL" required>

        <button type="submit" class="button-submit">Submit</button>
        <a class="button-back" href="/CMS/projects/">Back to Homepage</a>
    </form>
</div>