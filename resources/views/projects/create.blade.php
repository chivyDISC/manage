<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/projects" method="post">
        {{ csrf_field() }}
        Name:
        <input type="text" name="name">
        <br>
        Content:
        <input type="text" name="content">
        <br>
        Start:
        <input type="text" name="start">
        <br>
        End:
        <input type="text" name="end">
        <br>
        <button>Create</button>
    </form>
</body>
</html>