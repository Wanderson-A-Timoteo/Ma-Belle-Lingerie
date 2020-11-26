<?php

    include_once("conexaoMySQL.php");

    class DadosCategoria extends conexaoMySQL{
        private $id, $categoria, $slug_categoria, $ordem_categoria, $ativo_categoria;
        
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this-> id;
        }
        
        public function getCategoria(){
            return $this-> categoria;
        }
        public function getSlugCategoria(){
            return $this-> slug_categoria;
        }
        public function getOrdemCategoria(){
            return $this-> ordem_categoria;
        }
        public function getAtivo(){
            return $this-> ativo_categoria;
        }
        
        
        public function mostrarDados(){
            $sql= "SELECT * FROM  categoria WHERE id_categoria = '$this->id'";
            $qry = self::executarSQL($sql);
            $linha = self::listar($qry);
            
            $this->id  				= $linha["id_categoria"];
            $this->categoria  		= $linha["categoria"];
            $this->slug_categoria  	= $linha["slug_categoria"];
            $this->ordem_categoria  = $linha["ordem_categoria"];
            $this->ativo_categoria  = $linha["ativo_categoria"];
            
        
		}
		// Metodo mostra em um select as categorias do banco de dados no frm de cadastro de produto
		public function comboCategoria($id){
			$sql= "SELECT * FROM  categoria ";
			$qry = self::executarSQL($sql);
			
			while($linha = self::listar($qry)){
				if($id==$linha["id_categoria"]){
					$selecionado = "selected='selected' ";
				} else{
					$selecionado = "";
				}
				
				echo "<option value=$linha[id_categoria] $selecionado>$linha[categoria]</option>\n";
			}
			
		}
		// Metodo para retornar a quantidade de categorias
		public function totalRegistros($sql){
			$qry = self::executarSQL($sql);
			$total= self::contaDados($qry);
			
			return $total;
		}

		// Metodo para listar as categorias na home pegando pela posição (i) e não pelo linha como no comboCategoria que pega por linha no banco de dados
		public function verCategorias($sql,$i){
			$qry = mysql_query($sql);
			
			$this->id  				= mysql_result($qry,$i,"id_categoria");
			$this->categoria  		= mysql_result($qry,$i,"categoria");
			$this->slug_categoria  	= mysql_result($qry,$i,"slug_categoria");
			$this->ordem_categoria  = mysql_result($qry,$i,"ordem_categoria");
			$this->ativo_categoria  = mysql_result($qry,$i,"ativo_categoria");
		}

    }

    class DadosBanner extends conexaoMySQL{
		private $id, $titulo_banner, $alt, $url_banner, $ativo_banner, $imagem_banner;
		
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this-> id;
		}
		
		public function getTituloBanner(){
			return $this-> titulo_banner;
		}
		public function getAlt(){
			return $this-> alt;
		}
		public function getUrlBanner(){
			return $this-> url_banner;
		}
		public function getAtivo(){
			return $this-> ativo_banner;
		}
		public function getImagem(){
			return $this-> imagem_banner;
		}
		
		public function mostrarDados(){
			$sql= "SELECT * FROM  banner WHERE id_banner = '$this->id'";
			$qry = self::executarSQL($sql);
			$linha = self::listar($qry);
			
			$this->id  				= $linha["id_categoria"];
			$this->titulo_banner  	= $linha["titulo_banner"];
			$this->alt  			= $linha["alt"];
			$this->url_banner  		= $linha["url_banner"];
			$this->ativo_banner  	= $linha["ativo_banner"];
			$this->imagem_banner  	= $linha["imagem_banner"];
		
		}
	
	}

	class DadosProduto extends conexaoMySQL{
		private $id, $id_categoria, $titulo_produto, $preco, $fabricante, $modelo,
				$descricao, $conteudo, $slug_produto, $ativo_produto, $imagem_produto;
				
		private $categoria, $slug_categoria;
		
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this-> id;
		}		
		public function getIdCategoria(){
			return $this-> id_categoria;
		}
		public function getTituloProduto(){
			return $this-> titulo_produto;
		}
		public function getPreco(){
			return $this-> preco;
		}
		public function getAtivo(){
			return $this-> ativo_banner;
		}
		public function getFabricante(){
			return $this-> autor;
		}		
		public function getModelo(){
			return $this-> duracao;
		}
		public function getDescricao(){
			return $this-> descricao;
		}
		public function getConteudo(){
			return $this-> conteudo;
		}
		public function getSlugProduto(){
			return $this-> slug_produto;
		}
		public function getAtivoProduto(){
			return $this-> ativo_produto;
		}		
		public function getImagemProduto(){
			return $this-> imagem_produto;
		}
		
		public function getCategoria(){
			return $this-> categoria;
		}
		
		public function getSlugCategoria(){
			return $this-> slug_categoria;
		}
		
		public function mostrarDados(){
			$sql= "SELECT c.*, p.* FROM categoria c,  produto p WHERE c.id_categoria=p.id_categoria and id_produto = '$this->id'";
			$qry = self::executarSQL($sql);
			$linha = self::listar($qry);
			
			$this->id  				= $linha["id_produto"];
			$this->id_categoria  	= $linha["id_categoria"];
			$this->titulo_produto  	= $linha["titulo_produto"];
			$this->preco  			= $linha["preco"];
			$this->fabricante  		= $linha["fabricante"];
			$this->modelo  			= $linha["modelo"];
			$this->descricao  		= $linha["descricao"];
			$this->conteudo  		= $linha["conteudo"];
			$this->slug_produto  	= $linha["slug_produto"];
			$this->ativo_produto  	= $linha["ativo_produto"];
			$this->imagem_produto  	= $linha["imagem_produto"];		
			
			$this->categoria  		= $linha["categoria"];
			$this->slug_categoria  	= $linha["slug_categoria"];	
		}
	
		public function totalRegistros($sql){
			$qry = self::executarSQL($sql);
			$total= self::contaDados($qry);
			
			return $total;
		}
		
		
		public function verProdutos($sql,$i){
			$qry = mysql_query($sql);
			
			
			$this->id  				= mysql_result($qry,$i,"id_produto");
			$this->id_categoria  	= mysql_result($qry,$i,"id_categoria");
			$this->titulo_produto  	= mysql_result($qry,$i,"titulo_produto");
			$this->preco  			= mysql_result($qry,$i,"preco");
			$this->fabricante  		= mysql_result($qry,$i,"fabricante");
			$this->modelo  			= mysql_result($qry,$i,"modelo");
			$this->descricao  		= mysql_result($qry,$i,"descricao");
			$this->conteudo  		= mysql_result($qry,$i,"conteudo");
			$this->slug_produto  	= mysql_result($qry,$i,"slug_produto");
			$this->ativo_produto  	= mysql_result($qry,$i,"ativo_produto");
			$this->imagem_produto  	= mysql_result($qry,$i,"imagem_produto");
			
			$this->categoria  		= mysql_result($qry,$i,"categoria");
			$this->slug_categoria  	= mysql_result($qry,$i,"slug_categoria");	
		}
		
		public function listarProdutos($sql_prod){					
							
				$total_prod = $this->totalRegistros($sql_prod);
			for($j=0;$j<$total_prod;$j++){
				$this-> verProdutos($sql_prod,$j);
				$idproduto = $this->getId();
				
				$endereco = pg."/detalhe/".$this->getSlugCategoria()."/".$this->getSlugProduto()."/".$this->getId();
				$img=pg ."/admin/fotos/".$this->getImagemProduto();
				$prod = $this->getTituloProduto();
				$preco=$this->getPreco();
				$action = pg."/op_carrinho.php";
				
			echo "		
				<li>					
					
					<a href= $endereco >
						<figure>
							<img src=$img alt=$prod width=92 height=139>
							<figcaption> $prod </figcaption>
						</figure>
						<span>  $preco </span>
						</a>
						<form action=$action method='post'>
							<input type=hidden name=txt_valor value=$preco />
							<input type=hidden name='id_produto' value=$idproduto />
							<input type=hidden name=acao value='INSERIR' /> 
							<input type=submit value=''> 
						</form>
						
					
				</li>	";			
			 } 
		
		}
		
	}

?>