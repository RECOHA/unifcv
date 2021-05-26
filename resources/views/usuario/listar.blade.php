<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usuários Listar</title>
</head>
<body>
	<h1>Listar Usuários</h1>
	<p><a href="/usuario/novo">Novo Usuário</a></p>
	@if(session('mensagem'))
		<p>{{ session('mensagem') }}</p>
	@endif

	<table border="1">
	@foreach ($usuarios as $usuario)
		<tr>
			<td>{{ $usuario->id }}</td>
			<td>{{ $usuario->nome }}</td>
			<td>{{ $usuario->email }}</td>
			<td>{{ $usuario->login }}</td>
			<td><a href="/usuario/{{ $usuario->id }}">Exibir</a></td>
			<td><a href="/usuario/editar/{{ $usuario->id }}">Editar</a></td>
			<td><a href="/usuario/apagar/{{ $usuario->id }}">Excluir</a></td>
		</tr>
	@endforeach
	</table>

</body>
</html>