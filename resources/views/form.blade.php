<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <form action="">
        <input type="chexbox" @checked($user['premium']) value="Premium" /> <br />
        <input type="text" value="{{$user['name']}}" @readonly(!$user['admin']) /> <br />
    </form>
</body>

</html>