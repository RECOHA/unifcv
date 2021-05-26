<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Novo Usuário</title>
</head>
<body>
	<h1>Cadastrar Novo Usuário</h1>
	@if ($errors->any())
	    <div>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form action="/usuario/salvar" method="post">
		@csrf
		<p>
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome" value="{{ old('nome') }}"> 
		</p>
		<p>
			<label for="email">E-mail: </label>
			<input type="text" name="email" id="email" value="{{ old('email') }}">
		</p>
		<p>
			<label for="login">Login: </label>
			<input type="text" name="login" id="login" value="{{ old('login') }}">
		</p>
		<p>
			<label for="senha">Senha: </label>
			<input type="password" name="senha" id="senha">
		</p>
		<p>
			<input type="submit" value="Salvar">
		</p>
	</form>
</body>
</html>