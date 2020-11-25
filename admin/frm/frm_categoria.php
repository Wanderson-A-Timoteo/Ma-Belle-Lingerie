<div id="formulario">
	<h2> Cadastro de Categorias </h2>
	<form action="./op/op_categoria.php" method="post" enctype="multipart/form-data">
		<label>
			<span class="titulo">Título da Categoria </span>
			<input type="text" name="txt_titulo" id="txt_titulo">
		</label>
		
		<div class="dois-campos">
			<label>
				<span class="titulo"> Ordem </span>
				<input type="text" name="txt_ordem" id="txt_ordem">
			</label>
			<label>
				<span class="titulo"> Ativo </span>
				<select name="txt_ativo" id="txt_ativo">
					<option value="s"> Sim </option>
					<option value="n"> Não </option>
				</select>
			</label>
		</div>
		
		<input type="submit" value="Enviar" class="botao" />
	</form>
</div>