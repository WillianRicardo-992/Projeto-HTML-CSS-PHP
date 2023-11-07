<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Inicio</title>
</head>

<body>
    <div class="cadastro">
        <?php
        include_once("Topo.php");
        ?>
        <h1>Dados Cadastrados</h1>
        <br>
        <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $data = $_POST["data"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];

        echo "Nome: " . $nome  . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Telefone: " . $telefone . "<br>";
        echo "Data de nascimento: " . $data . "<br>";
        echo "Cidade: " . $cidade . "<br>";
        echo "Estado: " . $estado . "<br>";
        
        $contato = array("Nome" => $nome, "Email" => $email, "Telefone" => $telefone, "data" => $data, "Cidade" => $cidade, "Estado" => $estado);

        echo "<hr> Vetor criado: <br><br>";
        print_r($contato);
        if(file_exists("dados.json"))
        {
            $string = file_get_contents("dados.json");

            $json = json_decode($string, true); 
        }

        $json["contatos"][] = $contato;

        $fp = fopen('dados.json', 'w');

        if($fp == false){
            print(error_get_last());
        }

        fwrite($fp, json_encode($json));

        fclose($fp);
        ?>
        <br><br>
        <h3>Dados Cadastrado com sucesso!!</h3>
        <?php
        include_once("footer.php")
        ?>
    </div>
</body>

</html>