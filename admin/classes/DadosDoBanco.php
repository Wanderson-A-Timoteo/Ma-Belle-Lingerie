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
    }

?>