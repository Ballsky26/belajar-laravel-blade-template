<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    @php

    class Person {
    public string $name;
    public string $address;
    }
    $person = new Person();
    $person->name = "Iqbal";
    $person->address = "Tirto";

    @endphp

    <p>{{$person->name}}</p>
    <p>{{$person->address}}</p>
</body>

</html>