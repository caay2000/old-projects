<div class="container-fluid medidasContingut">
	<div class="row-fluid">
		
		<div class="span5 offset3">
			<div class="formulari">
				<form action="<?php echo PAGE_ROOT; ?>/admin/login" method="POST">
					<h3><?php __('administrador'); ?></h3>
					<div class="input-prepend">
		                <span class="add-on"><i class="icon-user"></i></span>
		                <input class="input-xlarge" type="text" placeholder="Usuari" name="user">
		            </div>
		            <div class="input-prepend">
		                <span class="add-on"><i class="icon-lock"></i></span>
		                <input class="input-xlarge" type="password" placeholder="Password" name="psw" >
		            </div>
					<button class="btn btn_amarillo" type="submit"><?php __('entrar'); ?></button>
				</form>
			</div>
		</div>
	
	</div>
</div>