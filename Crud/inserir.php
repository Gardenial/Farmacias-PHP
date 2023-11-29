<?php 
namespace Farmacias\Crud;

require_once('conexao.php');
use Farmacias\Crud\Conexao;

// Representando cada farmácia;
class Inserir {
    public function Insert(Conexao $conexao, string $usuario, int $id, 
    string $nome, string $rg, string $telefone, bool $plano_saude, bool $farmacia_popular, string $produtos_farmacia_popular){
        try {
            $conn = $conexao->Conectar();
            $sql = "INSERT INTO $usuario (id, nome, rg, telefone, plano_saude, farmacia_popular, produtos_farmacia_popular)
                    VALUES ($id, '$nome', '$rg', '$telefone', $plano_saude, $farmacia_popular, '$produtos_farmacia_popular')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                return "<br>Inserido com Sucesso.";
            } else {
                return "<br> Não Inserido.";
            }

            mysqli_close($conn);

        } catch (Except $erro){
            echo $erro->getMessage();
        }
    }
}
?>
