<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ERP Task Project</title>

    </head>
    <body>
        <div class="container">
            <h3>ERP Task</h3>
            <a class="btn btn-success" href="{{ route('user.create') }}">
                Create User
            </a>
        </div>
    </body>
</html>
