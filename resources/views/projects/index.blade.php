<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Birdboard</title>
</head>
<body>
    <h1>Birdboard</h1>
    <ul>
        @foreach($projects as $project)
            <li><a href="{{ $project->path() }}">{{ $project->title }}</li>
        @endforeach
    </ul>
</body>
</html>
