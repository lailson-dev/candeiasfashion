<section class="container login-register">
	<div class="create-account">
		<h2>Criar novo cadastro</h2>
		<p>Vamos lá, preenchao o formulário de cadastro. É rápido e fácil. </p>
		<form class="form" action="/user_store" method="POST">
			<div class="register-field-container">
				<label for="name">Nome completo</label>
				<input type="text" name="name" id="name" data-js="name" class="register-field-input">
			</div>
			<div class="register-field-container">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" data-js="email" class="register-field-input">
			</div>
			<div class="register-field-container">
				<label for="password">Senha</label>
				<input type="password" name="password" id="password" data-js="password" class="register-field-input">
			</div>
			<div class="register-field-container">
				<label>Gênero</label>
				<label><input type="radio" name="gender" value="M"> Masculino</label>
				<label><input type="radio" name="gender" value="F"> Feminino</label>
			</div>
			<div class="register-field-container">
				<button type="submit" class="btn btn-enter">Cadastrar</button>
			</div>
		</form>
	</div>	
</section>