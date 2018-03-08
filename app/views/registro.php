<section class="container login-register">
	<div class="create-account">
		<h2>Criar novo cadastro</h2>
		<p>Vamos lá, preenchao o formulário de cadastro. É rápido e fácil. </p>
		<form class="form" action="/user_store" method="POST">
			<div class="register-field-container">
				<label for="input-name">Nome completo</label>
				<input type="text" name="input-name" id="input-name" data-js="input-name" class="register-field-input">
			</div>
			<div class="register-field-container">
				<label for="input-newEmail">Email</label>
				<input type="email" name="input-newEmail" id="input-newEmail" data-js="input-newEmail" class="register-field-input">
			</div>
			<div class="register-field-container">
				<label for="input-password">Senha</label>
				<input type="password" name="input-password" id="input-password" data-js="input-password" class="register-field-input">
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