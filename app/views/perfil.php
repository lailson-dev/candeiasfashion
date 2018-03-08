<section class="container">
	<div class="edit-profile">
		<h2>Atualize seus dados</h2>
		<p>A sua localidade será utilizada para a entrega das suas compras... </p>
		<form action="/user_update" method="POST">
			<div class="edit-control">
				<label for="name">Nome completo</label>
				<input type="hidden" name="id" id="id" value="<?= $userFind->id; ?>">
				<input type="text" name="name" id="name" value="<?= $userFind->name; ?>">
			</div>
			<div class="edit-control">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" value="<?= $userFind->email; ?>">
			</div>
			<div class="edit-control">
				<label for="password">Senha</label>
				<input type="password" name="password" id="password" value="<?= $userFind->password; ?>">
			</div>
			<hr>
			<br>
			<div class="edit-control">
				<label for="state">Estado</label>
				<input type="text" name="state" id="state" value="<?= $userFind->state; ?>" maxlength="2">
			</div>
			<div class="edit-control">
				<label for="city">Cidade</label>
				<input type="text" name="city" id="city" value="<?= $userFind->city; ?>">
			</div>
			<div class="edit-control">
				<label for="district">Bairro</label>
				<input type="text" name="district" id="district" value="<?= $userFind->district; ?>">
			</div>
			<div class="edit-control">
				<label for="address">Endereço</label>
				<input type="text" name="address" id="address" value="<?= $userFind->address; ?>">
			</div>
			<div class="register-field-container">
				<button type="submit" class="btn btn-enter">Salvar</button>
			</div>
		</form>
	</div>	
</section>