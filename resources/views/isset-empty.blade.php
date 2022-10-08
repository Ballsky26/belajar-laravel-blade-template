<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset Empty</title>
</head>

<body>
    <p>
        @isset($name)
        Hello, Nama saya adalah {{$name}}
        @endisset
    </p>

    <p>
        @empty($hobbies)
        Saya tidak mempunyai Hobi
        @endempty
    </p>
</body>

</html>