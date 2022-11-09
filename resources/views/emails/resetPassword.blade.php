<html>
<head>
    <title>GoGetter.com</title>
</head>
<body>
    <h1>Hola {{ $user->name }}</h1>
    <p>Se solicitó un restablecimiento de contraseña para tu cuenta {{$user->email}}, haz clic en el siguiente enlace para cambiar tu contraseña.
    </p>
    <a target="_blank" href="{{ $clientUrl.'/change_password?token='.$token.'&email='.$user->email }}">Restablecer contraseña</a>
    <p>Si usted no solicitó este cambio de contraseña, solo ignore este mensaje</p>
    <p>Saludos, JADE</p>
</body>
</html>
