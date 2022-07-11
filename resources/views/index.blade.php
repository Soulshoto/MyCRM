<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form en laravel</title>
</head>

<body>

    <!-- FORM VIEW -->

    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <input type="text" name="email" />
        <input type="text" name="password" />
        <button type="submit">Valider</button>
    </form>

    <h1>Ce qu'il manque...</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif

</body>

</html>