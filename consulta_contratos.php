<?php
// estabelecendo conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conenction = new mysqli($servername, $username, $password, $dbname);

// verificando se a conexão foi feita com sucesso.
if ($conenction->connect_error)
{
    die("Falha na conexão com o banco de dados: " . $conenction->conenctionect_error);
}

// realizando consulta ao banco de dados
$sql = "SELECT Tb_banco.nome, Tb_convenio.verba, Tb_contrato.codigo, Tb_contrato.data_inclusao, Tb_contrato.valor, Tb_contrato.prazo
        FROM Tb_banco
        INNER JOIN Tb_convenio
        ON Tb_banco.codigo = Tb_convenio.banco
        INNER JOIN Tb_convenio_servico
        ON Tb_convenio.codigo = Tb_convenio_servico.convenio
        INNER JOIN Tb_contrato
        ON Tb_convenio_servico.codigo = Tb_contrato.convenio_servico";

$result = $conenction->query($sql);

// verificação se a consulta resultou algo
if ($result->num_rows > 0)
{
    echo "<table>
            <tr>
                <th>Nome do Banco</th>
                <th>Verba</th>
                <th>Código do Contrato</th>
                <th>Data de Inclusão</th>
                <th>Valor</th>
                <th>Prazo</th>
            </tr>";
    while ($row = $result->fetch_assoc())
    // fetch_assoc usando para recuperar a próxima linha de um resultado de uma consulta SQL.
    {
        echo "<tr>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["verba"] . "</td>
                <td>" . $row["codigo"] . "</td>
                <td>" . $row["data_inclusao"] . "</td>
                <td>" . $row["valor"] . "</td>
                <td>" . $row["prazo"] . "</td>
              </tr>";
    }
    echo "</table>";
}
else
{
    echo "Nenhum resultado encontrado.";
}

// fechando conexão com o banco de dados
$conenction->close();
?>
