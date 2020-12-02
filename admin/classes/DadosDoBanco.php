<?php
	//error_reporting(0);
    include_once("conexaoMySQL.php");

	class DadosCliente extends conexaoMySQL{
		private $id, $cliente, $endereco, $cidade, $bairro, $uf, $cep, $email, $sexo,$fone, $senha2, $ativo,
		
		 $numero, $ddd, $complemento;
		
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this-> id;
		}		
		public function getCliente(){
			return $this-> cliente;
		}
		public function getEndereco(){
			return $this-> endereco;
		}
		public function getCidade(){
			return $this-> cidade;
		}
		public function getBairro(){
			return $this-> bairro;
		}
		public function getUf(){
			return $this-> uf;
		}		
		public function getCep(){
			return $this-> cep;
		}
		public function getEmail(){
			return $this-> email;
		}
		public function getSexo(){
			return $this-> sexo;
		}
		public function getFone(){
			return $this-> fone;
		}
		
		public function getSenha(){
			return $this-> senha2;
		}
		public function getAtivo(){
			return $this-> ativo;
		}
		
			
		public function getNumero(){
			return $this-> numero;
		}		
		public function getDDD(){
			return $this-> ddd;
		}
		public function getComplemento(){
			return $this-> complemento;
		}
			
			
			
			
	
		public function mostrarDados(){
			$sql= "SELECT * FROM  cliente WHERE id_cliente = '$this->id'";
			$qry = self::executarSQL($sql);
			$linha = self::listar($qry);
			
			$this->id  			= $linha["id_cliente"];
			$this->cliente  	= $linha["cliente"];
			$this->endereco  	= $linha["endereco"];
			$this->cidade  		= $linha["cidade"];
			$this->bairro  		= $linha["bairro"];
			$this->uf  			= $linha["uf"];			
			$this->cep  		= $linha["cep"];
			$this->email  		= $linha["email"];
			$this->sexo  		= $linha["sexo"];
			$this->fone  		= $linha["fone"];		
			$this->senha2  		= $linha["senha"];
			$this->ativo  		= $linha["ativo_cliente"];
			
		
			$this->numero  		= $linha["numero"];		
			$this->ddd  		= $linha["ddd"];
			$this->complemento 	= $linha["complemento"];
			
		
		}
		public function totalRegistros($sql){
			$qry = self::executarSQL($sql);
			$total= self::contaDados($qry);			
			return $total;
		}
		
		
		public function verCliente($sql,$i){
			$qry = mysql_query($sql);
			
			$this->id  			= mysql_result($qry,$i,"id_cliente");
			$this->cliente  	= mysql_result($qry,$i,"cliente");
			$this->endereco  	= mysql_result($qry,$i,"endereco");
			$this->cidade  		= mysql_result($qry,$i,"cidade");
			$this->bairro  		= mysql_result($qry,$i,"bairro");
			$this->uf  			= mysql_result($qry,$i,"uf");			
			$this->cep  		= mysql_result($qry,$i,"cep");
			$this->email  		= mysql_result($qry,$i,"email");
			$this->sexo  		= mysql_result($qry,$i,"sexo");
			$this->fone  		= mysql_result($qry,$i,"fone");			
			$this->senha2  		= mysql_result($qry,$i,"senha");
			$this->ativo  		= mysql_result($qry,$i,"ativo_cliente");

		}
	}

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
		public function setCategoria($categoria){
			$this-> categoria = $categoria;
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
		public function verCategorias($sql, $i){
			$qry = mysqli_query($sql);
			
			$this->id  				= mysql_result($qry,$i,"id_categoria");
			$this->categoria  		= mysql_result($qry,$i,"categoria");
			$this->slug_categoria  	= mysql_result($qry,$i,"slug_categoria");
			$this->ordem_categoria  = mysql_result($qry,$i,"ordem_categoria");
			$this->ativo_categoria  = mysql_result($qry,$i,"ativo_categoria");
		}

		public function todasCategorias(){
			$sql= "SELECT * FROM categoria ";
			$qry = self::executarSQL($sql);
			$lista = [];
			while($linha = self::listar($qry)){
			
				$categoria = new DadosCategoria();
				$categoria->SetId($linha["id_categoria"]);
				$categoria->SetCategoria($linha["categoria"]);
				array_push($lista, $categoria);
			}
			return $lista;
			
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
		public function setIdCategoria( $id_categoria){
			$this-> id_categoria =  $id_categoria;
		}		
		public function getIdCategoria(){
			return $this-> id_categoria;
		}
		
		public function getTituloProduto(){
			return $this-> titulo_produto;
		}
		public function setTituloProduto($titulo_produto){
			$this->titulo_produto = $titulo_produto;
		}
		public function setPreco($preco){
			$this-> preco = $preco;
		}

		public function getPreco(){
			return $this-> preco;
		}
		public function setAtivo($ativo_banner){
			$this-> ativo_banner = $ativo_banner;
		}
		public function getAtivo(){
			return $this-> ativo_banner;
		}
		public function setFabricante($fabricante){
			$this-> fabricante = $fabricante;
		}
		public function getFabricante(){
			return $this-> fabricante;
		}
		public function setModelo( $modelo){
			$this-> modelo = $modelo;
		}		
		public function getModelo(){
			return $this-> modelo;
		}
		public function setDescricao($descricao){
			$this -> descricao = $descricao;
		}
		public function getDescricao(){
			return $this-> descricao;
		}
		public function setConteudo($conteudo){
			$this-> conteudo = $conteudo;
		}
		public function getConteudo(){
			return $this-> conteudo;
		}
		public function setSlugProduto($slug_produto){
			$this-> slug_produto = $slug_produto;
		}
		public function getSlugProduto(){
			return $this-> slug_produto;
		}
		public function setAtivoProduto($ativo_produto){
			$this-> ativo_produto = $ativo_produto;
		}
		public function getAtivoProduto(){
			return $this-> ativo_produto;
		}
		public function setImagemProduto($imagem_produto){
			$this-> imagem_produto = $imagem_produto;
		}		
		public function getImagemProduto(){
			return $this-> imagem_produto;
		}
		public function setCategoria($categoria){
			$this-> categoria = $categoria;
		}
		public function getCategoria(){
			return $this-> categoria;
		}
		
		public function setSlugCategoria($slug_categoria){
			$this-> slug_categoria = $slug_categoria;
		}
		public function getSlugCategoria(){
			return $this-> slug_categoria;
		}
		
		public function mostrarDados(){
			$sql= "SELECT * FROM produto WHERE id_produto = '$this->id' ";
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
			
			//$this->categoria  		= $linha["categoria"];
			//$this->slug_categoria  	= $linha["slug_categoria"];	
		}
	
		public function totalRegistros($sql){
			$qry = self::executarSQL($sql);
			$total= self::contaDados($qry);
			
			return $total;
		}
		
		
		public function verProdutos($sql,$i){
			$qry = mysqli_query($sql);
			
			
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
				
		}

		public function getProdutosPorCategoria($id_categoria){
			$sql= "SELECT * FROM produto WHERE id_categoria = " . $id_categoria;
			$qry = self::executarSQL($sql);
			$lista = [];
			while($linha = self::listar($qry)){
			
				$produto = new DadosProduto();
				$produto->SetId($linha["id_produto"]);
				$produto->SetIdCategoria($linha["id_categoria"]);
				$produto->SetTituloProduto($linha["titulo_produto"]);
				$produto->SetPreco($linha["preco"]);
				$produto->SetFabricante($linha["fabricante"]);
				$produto->SetModelo($linha["modelo"]);
				$produto->SetDescricao($linha["descricao"]);
				$produto->SetSlugProduto($linha["slug_produto"]);
				$produto->SetAtivoProduto($linha["ativo_produto"]);
				$produto->SetImagemProduto($linha["imagem_produto"]);



				array_push($lista, $produto);
			}
			return $lista;
			
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