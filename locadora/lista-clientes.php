<h2>Lista de Clientes</h2>
<div>
    <a href="index.php?menu=cad-clientes">Cadastrar novo Cliente</a>
</div>
<div>
    <?php
    if (isset ($_POST["txtPesquisa"])) {
        $txtPesquisa = $_POST["txtPesquisa"];
    } else {
        $txtPesquisa = "";
    }
    ?>
    <form action="" method="post">
        <label for="txtPesquisa">Pesquisar</label>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button type="submit">OK</button>
    </form>
</div>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Nome do Cliente</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT idCliente,nomeCliente,telefoneCliente,emailCliente,
        CASE
            WHEN statusCliente = 0 THEN 'Ativo'
            WHEN statusCliente = 1 THEN 'Inativo'
        END
        as statusCliente
        FROM
        tbclientes
        where nomeCliente like '%{$txtPesquisa}%'
         order by nomeCliente";
$rs = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
while ($dados = mysqli_fetch_assoc($rs)){
?>
    <tr>
        <td><?= $dados["idCliente"] ?></td>
        <td><?= $dados["nomeCliente"] ?></td>
        <td><?= $dados["telefoneCliente"] ?></td>
        <td><?= $dados["emailCliente"] ?></td>
        <td><?= $dados["statusCliente"] ?></td>
        <td>
                <a href="index.php?menu=editar-clientes&idCliente=<?=$dados["idCliente"]?>">
                Editar
                </a>
            </td>
            <td>
                <a href="index.php?menu=excluir-clientes&idCliente=<?=$dados["idCliente"]?>">
                 Excluir
                </a>
        </td>
    </tr>
    <?php
    }
    ?>
    </tbody>

</table>

