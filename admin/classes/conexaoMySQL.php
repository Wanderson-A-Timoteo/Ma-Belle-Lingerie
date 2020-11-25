<?php

    class conexaoMySQL {
        
        protected $servidor;
        protected $usuario;
        protected $senha;
        protected $banco;
        protected $conexao;
        protected $qry;
        protected $dados;
        protected $totalDados;

        public function __construct(){
            // variaveis para acesso ao banco de dados
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->senha = "";
            $this->banco = "mabelle";
            
            self::conectar();
        }
        
        // validando a conexao
        function conectar() {
            
            $this->conexao = @mysqli_connect ($this->servidor, $this->usuario, $this->senha, $this->banco) or die ("Não foi possível conectar com o SERVIDOR de Banco de Dados".mysqli_error());
            
            $this->banco = @mysqli_select_db($this->conexao, $this->banco) or die("Não foi possível conectar com o Banco de dados".mysqli_error());
        }

        function executarSQL($sql) {
            
            $this->qry = @mysqli_query($this->conexao, $sql) or die ("Erro ao executar o comando SQL: $sql <br>".mysqli_error());
            return $this->qry;
        }

        function listar($qr) {
			$this->dados= @mysqli_fetch_assoc($qr);
        return $this->dados;
        }

        function contaDados($qry){
			$this->totalDados = mysqli_num_rows($qry);
			return $this->totalDados;
		}
        
    }
?>