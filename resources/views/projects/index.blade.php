<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
</head>
<body>
    @foreach($projects as $project)
        <li>{{ $project->name }}</li>
        <li>{{ $project->content }}</li>
        <li>{{ $project->start }}</li>
        <li>{{ $project->end }}</li>
    @endforeach
    <br>
    <a href="/projects/create"> Create One! </a>
</body>
</html>