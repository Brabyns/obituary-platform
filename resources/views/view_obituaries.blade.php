<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Obituaries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Obituaries</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Date of Death</th>
                    <th>Content</th>
                    <th>Author</th>
                    <th>Submission Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($obituaries as $obituary)
                <tr>
                    <td>{{ $obituary->id }}</td>
                    <td>{{ $obituary->name }}</td>
                    <td>{{ $obituary->date_of_birth }}</td>
                    <td>{{ $obituary->date_of_death }}</td>
                    <td>{{ $obituary->content }}</td>
                    <td>{{ $obituary->author }}</td>
                    <td>{{ $obituary->submission_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
