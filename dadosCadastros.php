<?php
    include_once "../cadastrar/connection.php";
?>

<?php
class Tabelas {
    public $colheita;
    public $connectionBD;

    public function criaTabela($tipo,$con) {
        switch ($tipo) {
            case 1:
                $sql = "select CodigoProduto, Descricao, Variedade FROM produto";
                $res=mysqli_query($con,$sql) or die (mysqli_connect_error());
                echo $sql;
                break;

            default:
                // code...
                break;
        }
    }

   // criaTabela(1);

}
$tab = new Tabelas();
$tab->criaTabela(1,$connectionBD);


?>
