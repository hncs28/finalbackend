<style>
    .form {
        --input-focus: #2d8cf0;
        --font-color: #323232;
        --bg-color: #fff;
        --main-color: #323232;
        padding: 20px;
        background: #f7f7f7;
        display: flex;
        flex-direction: column;
        gap: 20px;
        border-radius: 5px;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 600px;
        margin: 50px auto;
    }

    .input {
        width: 100%;
        padding: 10px;
        border-radius: 3px;
        border: 1px solid #ccc;
        font-size: 16px;
        outline: none;
    }

    .input:focus {
        border-color: var(--input-focus);
    }

    .button-submit,
    .button-back {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        text-align: center;
        transition: background 0.3s ease;
    }

    .button-submit {
        background-color: #007bff;
        color: white;
    }

    .button-submit:hover {
        background-color: #0056b3;
    }

    .button-back {
        background-color: rgb(3, 235, 99);
        color: white;
        margin-top: 10px;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .button-back:hover {
        background-color: #32a852;
    }

    .button-back a {
        color: inherit;
        text-decoration: none;
        display: block;
    }
</style>

<form class="form" method="POST" action="/CMS/projects/update/{{ $project->projectID }}">
    @method('PATCH')
    @csrf
    <h1 align="center">Update Project Information</h1>

    <input type="text" name="projectName" class="input" value="{{ $project->projectName }}"
        placeholder="Enter project name">
    <input type="text" name="projectLink" class="input" value="{{ $project->projectLink }}"
        placeholder="Enter project link">
    <input type="text" name="projectImg" class="input" value="{{ $project->projectImg }}"
        placeholder="Enter project image URL">

    <button type="submit" class="button-submit">Submit</button>
    <a class="button-back" href="/CMS/projects/">Back to Homepage</a>
</form>