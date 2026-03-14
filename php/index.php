<html>
<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php

ini_set("display_errors", 1);

echo "Versão atual do PHP: " . phpversion() . "<br>";

$servername = "mysql";
$username = "root";
$password = "Senha123";
$database = "meubanco";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$valor_rand1 = rand(1,999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)),1));

$host_name = gethostname();

$sql = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host)
VALUES ('$valor_rand1','$valor_rand2','$valor_rand2','$valor_rand2','$valor_rand2','$host_name')";

if ($conn->query($sql) === TRUE) {

    echo "Registro inserido com sucesso<br>";
    echo "Container que processou: $host_name";

} else {

    echo "Erro: " . $conn->error;

}

$conn->close();

?>

</body>
</html>
