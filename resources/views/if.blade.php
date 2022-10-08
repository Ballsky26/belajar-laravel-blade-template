<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>

<body>
    <p>
        @if(count($hobbies) == 1)
        Saya Mempunyai Hobi
        @elseif(count($hobbies) > 1)
        Saya Mempunyai Banyak Hobi
        @else
        Saya Tidak Mempunyai Hobi
        @endif
    </p>
</body>

</html>