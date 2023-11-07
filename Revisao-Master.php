<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">

    <title>Cadastro</title>
</head>

<body>
    <div class="cadastro">

        <?php
        include_once("Topo.php");
        ?>

        <h1>Revisão do pedido</h1>
        <br>
        <ul>
            <li>Plano: Master</li>
            <li>Velocidade: 600 MB</li>
            <li>Roteador Incluso</li>
            <li>Bonus: Disney +</li>
            <li>Velocidade de Download: 73 Mb/s</li>
            <li>Velocidade de Upload: 60 Mb/s</li>
            <li>Preço: 119,90</li>
            <br>

            <?php
            include("Assinar.php");
            ?>
        </ul>
        <br>
        
        <?php
        include_once("footer.php")
        ?>
    </div>

</body>

</html>