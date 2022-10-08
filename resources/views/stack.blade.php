<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    @push("script")
    <script src="first.js" />
    @endpush

    @push("script")
    <script src="second.js" />
    @endpush

    @prefend("script")
    <script src="third.js" />
    @endprefend

    @stack("script")

</body>

</html>