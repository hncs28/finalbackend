@if(Auth::check())

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Add New Activity</title>
        <link rel="stylesheet" href="../../../css/form.css">
        <!-- Include Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Font Awesome for icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <form class="form" method="POST" action="/CMS/activities/update/{{ $act->actID }}">
                @method('PATCH')
                @csrf
                <div class="title">
                    <p>Update Activity Information</p>
                </div>
                <input type="text" name="actName" value="{{ $act->actName }}" class="input" required>
                <input type="text" name="actImg" value="{{ $act->actImg }}" class="input" required>
                <button type="submit" class="button-submit">Submit</button>
                <a class="button-back" href="/CMS/activities/">Go to Homepage</a>
            </form>
        </div>
    </body>
@endif