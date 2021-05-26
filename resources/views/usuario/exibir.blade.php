<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exibir Usuário</title>
</head>
<body>
	<h1>{{ $usuario->nome }}</h1>
	<a href="/usuario">Voltar</a>
	<p>Código: {{ $usuario->id }}</p>
	<p>E-mail: {{ $usuario->email }}</p>
	<p>Login: {{ $usuario->login }}</p>
</body>
</html>