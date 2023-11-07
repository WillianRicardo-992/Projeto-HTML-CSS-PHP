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
    <div class="index">
        <?php
        include_once("Topo.php");
        ?>
        <img src="Imagens/sistema.jpg" alt="home" width="350x" height="250px">

        <h3>Missão</h3>
        <p>Oferecer produtos e serviços com <strong>qualidade</strong>, com valores justos e <strong>satisfazer as
                necessidades</strong> de nossos clientes.
        </p>

        <h3>Visão</h3>
        <p>Ser <i>referencia</i> no ramo da prestação de <em>serviços</em> técnológicos com <i>foco</i> em atender
            nossos
            clientes</p>

        <h3>Valores</h3>
        <ul>
            <li>Excelencia no atendimento</li>
            <li>Agilidade na prestação de serviços</li>
            <li>Ética</li>
            <li>Colaboração</li>
            <li>Respeito</li>
            <li>Motivação</li>
            <li>Inovação</li>
        </ul>

        <p>Confira nossos <u>planos</u> e <u>serviços</u> que estão com preços imperdiveis!!!</p>
        <p>Cadastre-se para receber novas <b>promoções</b> e ficar por dentro de nossas <b>novidades</b>.</p>

        <img src="Imagens/tecnologia.jpg" alt="internet" width="450px" height="300px">

        <?php
        include_once("footer.php")
        ?>
    </div>
</body>

</html>