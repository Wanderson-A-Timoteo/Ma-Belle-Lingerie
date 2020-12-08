<div id="base-carrinho">
	<h2> <img src="imagens/barra_carrinho01.png"> </h2>
	<h3> <img src="imagens/meu_carrinho.png"> </h3>
	<div class="dados-carrinho">
		<span> para excluir coloque a quantidade zero e clique em alterar </span>
		<form name="frm_carrinho" action="">
			<table cellPadding="0" cellSpacing="0" border="1">
				<thead>
					<tr>
						<th> Descrição do produto </th>
						<th> Quantidade </th>
						<th> Preço unitário </th>
						<th> Subtotal </th>
						<th> Alterar </th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>
							<img src="imagems/25.png" alt="">
							<strong>Conjunto de renda preto</strong>
						</td>
						<td> 01 </td>
						<td> 37,90 </td>
						<td> <input type="number" id="alterar" name="alterar" value="1" size="3" maxLength="3" min="0" max="100" step="1"> </td>
						<td> <input type="submit" name="Alterar" value="Alterar"> </td>
					</tr>

					<tr>
						<td colSpan="5">Valor total</td>
					</tr>
				</tbody>

			</table>
		</form>
	</div>
</div>