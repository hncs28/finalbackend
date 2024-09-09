<style>
    form {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: 'Nunito', sans-serif;
    }

    form h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 30px;
        color: #1d3557;
    }

    form p {
        margin-bottom: 20px;
    }

    form label {
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
        color: #333;
    }

    form input[type="text"],
    form textarea {
        width: calc(100% - 20px);
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        transition: border 0.3s ease;
    }

    form input[type="text"]:focus,
    form textarea:focus {
        border-color: #457b9d;
    }

    form button[type="submit"],
    form button[type="button"] {
        display: inline-block;
        background-color: #2a9d8f;
        color: white;
        border: none;
        padding: 12px 25px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        transition: background 0.3s ease;
        margin-right: 10px;
    }

    form button[type="submit"]:hover {
        background-color: #21867a;
    }

    form button[type="button"] a {
        color: white;
        text-decoration: none;
        font-weight: 600;
    }

    form button[type="button"] {
        background-color: #e63946;
    }

    form button[type="button"]:hover {
        background-color: #d62828;
    }

    /* Responsive styling */
    @media (max-width: 768px) {
        form {
            padding: 20px;
        }

        form button[type="submit"],
        form button[type="button"] {
            width: 100%;
            margin: 10px 0;
        }
    }
</style>

<form method="POST" action="/CMS/activities/store">
    @csrf
    <h1>Form Add New in Activities</h1>
    <p>
        <label for="actName">Name</label>
        <input type="text" name="actName" placeholder="Enter activity name">
    </p>
    <p>
        <label for="actImg">Image URL</label>
        <input type="text" name="actImg" placeholder="Enter image URL">
    </p>

    <p>
        <button type="submit">Submit</button>
        <button type="button"><a href="/CMS/activities/">Go to Homepage</a></button>
    </p>
</form>