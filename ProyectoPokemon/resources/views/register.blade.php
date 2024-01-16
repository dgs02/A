<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('guardar.user') }}" method="POST">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" required>

        <label for="username">Username</label>
        <input type="text" name="username">

        <label for="password">Password:</label>
        <input type="text" name="password" >

        <label for="email">Email:</label>
        <input type="text" name="email" >

        <button type="submit">Guardar User</button>
    </form>

</body>
</html>
