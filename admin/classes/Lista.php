<?php

	include_once("Paginacao.php");
	
	class Lista extends Paginacao{
		private $strNumPagina, $strPaginas, $strUrl;
		
		public function setNumPagina($valor){
			$this->strNumPagina = $valor;
		}
		
		public function setUrl($valor){
			$this->strUrl = $valor;
		}
		
		public function getPaginas(){
			return $this-> strNumPagina;
		}
		
		public function listaCategoria(){
			$sql = "SELECT * FROM categoria";
			$this->setParametro($this->strNumPagina);
			$this->setFileName($this->strUrl);
			$this->setInfoMaxPag(10);
			$this->setMaximoLinks(50);
			$this->setSQL($sql);
			
			self::iniciaPaginacao();
			$cont = 0;
			
			while ($linha = self::results()){
				$cont++;
				echo "
				
				<tr>
					<td> $linha[id_categoria] </td>
					<td> $linha[categoria] </td>
					<td> $linha[ativo_categoria] </td>
					<td> <a href='index.php?link=3&acao=Alterar&id=$linha[id_categoria]'> <img src='imagens/alterar.gif' border='0' /></a> </td>
					<td> <a href='index.php?link=3&acao=Excluir&id=$linha[id_categoria]'> <img src='imagens/excluir.gif' border='0' /></a> </td>		
				</tr>
				
				";
				
				self::setContador($cont);
			}		
			
		}
		
		public function listaBanner(){
			$sql = "SELECT * FROM banner";
			$this->setParametro($this->strNumPagina);
			$this->setFileName($this->strUrl);
			$this->setInfoMaxPag(10);
			$this->setMaximoLinks(50);
			$this->setSQL($sql);
			
			self::iniciaPaginacao();
			$cont = 0;
			
			while ($linha = self::results()){
				$cont++;
				echo "
				
				<tr>
				<td> $linha[id_banner] </td>
				<td> $linha[titulo_banner] </td>
				<td> $linha[ativo_banner] </td>
				<td> <a href='index.php?link=5&acao=Alterar&id=$linha[id_banner]'> <img src='imagens/alterar.gif' border='0' /></a> </td>
				<td> <a href='index.php?link=5&acao=Excluir&id=$linha[id_banner]'> <img src='imagens/excluir.gif' border='0' /></a> </td>		
				</tr>
				
				
				";
				
				self::setContador($cont);
			}		
			
        }
        
	}
	
	
?>