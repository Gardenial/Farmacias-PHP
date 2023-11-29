<?php

    namespace Farmacias\Crud;

class conexao
{
    public function Conectar(){
        try {
            $conn = mysqli_connect('localhost', 'root', '','Farmacias'); /* Conectando o BD */
            if ($conn) {
                echo "Conectado com Sucesso!";
                return $conn;
            }//Fim do IF

        } catch (Except $erro) {
            echo $erro;
        }//Fim do  Try/Except
    }//Fim da Function Conectar
    
}//Fim da Classe


?>