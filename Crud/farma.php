<?php
    namespace POO\Farmacias\Crud;

    class Farmacia{

        public int $id;
        public string $nome;
        public string $telefone;
        public bool   $plano_saude;
        public bool   $farmacia_popular;
        public string $produtos_farmacia_popular;


        public function __construct(int $id, string $nome, string $endereco, bool $plano_saude, bool $farmacia_popular, string $produtos_farmacia_popular){
            $this->id                           = $id;
            $this->nome                         = $nome;
            $this->plano_saude                  = $plano_saude;
            $this->farmacia_popular             = $farmacia_popular;
            $this->produtos_farmacia_popular    = $produtos_farmacia_popular;
        }//fim do construtor

        public function getid():int 
        {
            return $this->id;
        }//fim do get

        public function setid(int $id):void
        {
            $this->id = $id;
        }//fim do método set

        public function getNome():string 
        {
            return $this->nome;
        }//fim do get

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//fim do método set
        
        public function getplano_saude():bool 
        {
            return $this->plano_saude;
        }//fim do get

        public function setplano_saude(bool $plano_saude):void
        {
            $this->plano_saude = $plano_saude;
        }//fim do método set

        public function getfarmacia_popular():bool 
        {
            return $this->farmacia_popular;
        }//fim do get

        public function setfarmacia_popular(bool $farmacia_popular):void
        {
            $this->farmacia_popular = $farmacia_popular;
        }//fim do método set


        public function setEmail(string $produtos_farmacia_popular):void
        {
            $this->produtos_farmacia_popular = $produtos_farmacia_popular;
        }//fim do método set



    }//fim da classe
?>