<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de votre réservation</title>
</head>

<body>

    <!-- On crée notre formulaire -->
    <div class="form">
        <form action="{{ route('reservations.store') }}" method="post">
            @csrf

            <!-- Le nom du client -->
            <label for="firstname">Nom :</label>
            <input type="text" name="firstname" value="{{old('firstname')}}">

            <!-- Le prénom du client -->
            <label for="lastname">Prénom :</label>
            <input type="text" name="lastname" value="{{old('lastname')}}">

            <!-- La date du client pour sa réservation -->
            <label for="date">Date de votre réservation :</label>
            <input type="date" name="date" value="{{old('date')}}">

            <!-- Le nombre de personnes qui réservent -->
            <label for="people">Nombre de personnes :</label>
            <select name="people">
                <option value="">- Choisissez votre nombre -</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="8">9</option>
                <option value="10">10</option>
            </select>

            <input type="submit" value="Valider">

        </form>

        <!-- Il faut touj -->
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

    </div>


</body>

</html>