<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Car Title : {{ $car->carTitle}}
    <br>
    Car Price : {{ $car->carPrice}}
    <br>
    Car Description : {{ $car->description}}
    <br>
    Car Image : {{$car->carImage}}
    <br>
    Car Published : {{ $car->published}}
</body>

</html>