<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos informations</title>
</head>

<body>

    <h1>Liste des réservations :</h1>
    <!-- FOREACH : PLURIEL / SINGULIER -->
    <ul>
        @foreach($reservations as $reservation)
        <li>
            <p>Votre nom : {{$reservation->firstname}}</p>
            <p>Votre prénom : {{$reservation->lastname}}</p>
            <p>Votre date de réservation : {{$reservation->date}}</p>
            <p>Le nombre de personnes que vous avez mis : {{$reservation->people}}</p>
        </li>
        @endforeach
    </ul>

</body>

</html>