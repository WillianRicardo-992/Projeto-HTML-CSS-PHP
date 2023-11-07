<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Sobre</title>
</head>

<body>
    <div class="sobre">
        <?php
        include_once("Topo.php");
        ?>
        <div class="titulo">
            <h1>Sobre</h1>
        </div>
        <p>Fundada em 2022 na cidade de Alfenas/MG, a empresa Home.Net tem com o objetivo entregar aos clientes um serviço
            de qualidade de internet entre outros serviços como
            manutenção preventiva, manutenção corretiva e reparação do sistema.</p>
        <img src="Imagens/internet.png" alt="imagem" width="450px" height="300px">


        <h3>Contatos</h3>
        <img src="Imagens/contato.jpg" alt="" srcset="">
        <div class="contato">
            <ul>
                <li>email:solucoestecnicas@email.com.br</li>
                <li>telefone: (35)98888-8888</li>
                <li>Suporte Ténico: (35)99999-9999</li>
            </ul>
        </div>

        <div class="local">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14856.674881270685!2d-45.958917989209006!3d-21.422612308622263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1685579370396!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <?php
        include_once("footer.php")
        ?>
    </div>
</body>

</html>