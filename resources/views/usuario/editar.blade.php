<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Usuário</title>
</head>
<body>
	<h1>Editar Usuário</h1>
	@if ($errors->any())
	    <div>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<a href="/usuario">Voltar</a>
	<form action="/usuario/gravar/{{ $usuario->id }}" method="post">
		@csrf
		<p>
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome" value="{{ $usuario->nome }}"> 
		</p>
		<p>
			<label for="email">E-mail: </label>
			<input type="text" name="email" id="email" value="{{ $usuario->email }}">
		</p>
		<p>
			<label for="senha">Senha: </label>
			<input type="password" name="senha" id="senha">
		</p>
		<p>
			<input type="submit" value="Gravar">
		</p>
	</form>
</body>
</html>