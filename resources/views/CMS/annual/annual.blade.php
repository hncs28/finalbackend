@if(Auth::check())
<head>
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>Annual CMS Page</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Navigation Bar */
        nav {
            background-color: #1d3557;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 15px;
            transition: all 0.3s ease;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #457b9d;
        }

        .logout-btn {
            background-color: #e63946;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #d62828;
        }

        /* Header Styling */
        .page-header {
            text-align: center;
            margin: 60px 0;
            font-size: 42px;
            font-weight: bold;
            color: #1d3557;
        }

        /* Annuals Table */
        table {
            width: 90%;
            margin: 0 auto 40px auto;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table thead {
            background-color: #1d3557;
            color: white;
            text-transform: uppercase;
        }

        table th, table td {
            padding: 20px;
            text-align: center;
            font-size: 16px;
        }

        table tbody tr {
            transition: background-color 0.2s ease;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        table td img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        table td a {
            color: #1d3557;
            text-decoration: none;
            font-weight: 600;
        }

        table td a:hover {
            text-decoration: underline;
        }

        /* Button Styles */
        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-edit {
            background-color: #457b9d;
            color: white;
        }

        .btn-edit:hover {
            background-color: #1d3557;
        }

        .btn-delete {
            background-color: #e63946;
            color: white;
        }

        .btn-delete:hover {
            background-color: #d62828;
        }

        .btn-add {
            display: inline-block;
            background-color: #2a9d8f;
            color: white;
            padding: 15px 25px;
            font-size: 18px;
            text-align: center;
            margin: 30px auto;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-add:hover {
            background-color: #21867a;
        }

        /* Improved Responsive Design */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                padding: 20px;
            }

            nav ul {
                flex-direction: column;
                gap: 15px;
            }

            table {
                width: 100%;
            }

            table th, table td {
                padding: 10px;
                font-size: 14px;
            }

            table td img {
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="/CMS/activities/">Activities</a></li>
            <li><a href="/CMS/projects/">Projects</a></li>
            <li><a href="/CMS/traditional_room/">Traditional Room</a></li>
            <li><a href="/CMS/annual/">Annual List</a></li>
            <li><a href="/CMS/prizes/">Prizes List</a></li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </nav>

    <!-- Page Header -->
    <div class="page-header">Annual List</div>

    <!-- Annuals Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Time</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($annual as $row)
            <tr>
                <td>{{$row->annualID}}</td>
                <td><a href="/CMS/annual/{{$row->annualID}}">{{$row->annualName}}</a></td>
                <td>{{$row->annualTime}}</td>
                <td><img src="{{$row->annualImg}}" alt="Annual Image"></td>
                <td>
                    <a href="/CMS/annual/edit/{{$row->annualID}}">
                        <button type="button" class="btn btn-edit">Edit</button>
                    </a>
                    <form method="POST" action="/CMS/annual/destroy/{{$row->annualID}}" onsubmit="return ConfirmDelete(this)" style="display: inline-block;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Add New Annual Button -->
    <a href="/CMS/annual/create" class="btn-add">+ Add New Annual</a>
</body>
@else
<style>
            .message-container {
            background-color: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin: 100px auto;
            width: 80%;
            max-width: 600px;
            text-align: center;
        }

        .message-container p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #2a9d8f;
            color: white;
            padding: 15px 25px;
            font-size: 18px;
            text-align: center;
            border-radius: 5px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #21867a;
        }
</style>
<div class="message-container">
    <p>You have to log in to view this page.</p>
    <a href="/admin">
        <button type="button" class="btn-primary">Back to Login</button>
    </a>
</div>
@endif