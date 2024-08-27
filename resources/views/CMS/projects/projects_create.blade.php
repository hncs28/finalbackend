<style>
    form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background: #f7f7f7;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form p {
    margin-bottom: 20px;
}

form label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
}

form input[type="text"],
form textarea {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    font-size: 16px;
}
button.trangchu {
          background: rgb(3, 235, 99);
          color: white;
          height: 1.5cm;
          width: 3cm;
          border-radius: 5px;
      }

form button[type="submit"] {
    display: inline-block;
    background: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    text-align: center;
    font-size: 16px;
    border-radius: 3px;
    cursor: pointer;
    transition: background 0.3s ease;
}

form button[type="submit"]:hover {
    background: #0056b3;
}
</style>

<form method="POST" action="/CMS/projects/store">
    
    @csrf
    <h1 align="center">Form add new in projects</h1>
    <p>
        <label for="projectName">Name</label><br>
        <input type="text" name="projectName" value="">
    </p>

    <p>
        <label for="projectLink">Link</label><br>
        <input type="text" name="projectLink" value="">
    </p>
    <p>
        <label for="projectImg">Image</label><br>
        <input type="text" name="projectImg" value="">
    </p>
  
    <p>
        <button type="submit">Submit</button>
    </p>
    <p>
        <button type="button"><a href="/CMS/projects/">Ve trang chu</a></button>
    </p>
    
</form>