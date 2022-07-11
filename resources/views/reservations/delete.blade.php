<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <h1>Voir un contact supprimé :</h1>
        <ul>
            <li>
                <p>{{$reservations->firstname}}</p>
                <p>{{$reservations->lastname}}</p>
                <p>{{$reservations->date}}</p>
                <p>{{$reservations->people}}</p>
            </li>
        </ul>
    </div>
</body>

</html>