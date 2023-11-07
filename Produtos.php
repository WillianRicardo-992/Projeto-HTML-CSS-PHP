<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Produtos</title>
</head>

<body>
    <div class="produtos">
        <?php
        include_once("Topo.php");
        ?>
        <div class="titulo-plano">
            <h2>Planos</h2>
        </div>
        <div class="tabela">
            <table width="650" border="2px">
                <tr>
                    <th>Plano Basic</th>
                    <th>Plano Flex</th>
                    <th>Plano Plus</th>
                    <th>Plano Master</th>
                    <th>Plano Pro</th>
                    <th>Plano Ultimate</th>
                </tr>
                <tr>
                    <td>100 MB</td>
                    <td>200 MB</td>
                    <td>400 MB</td>
                    <td>600 MB</td>
                    <td>800 MB</td>
                    <td>1 GB</td>
                </tr>

                <tr>
                    <td>Roteador Incluso</td>
                    <td>Roteador Incluso</td>
                    <td>Roteador Incluso</td>
                    <td>Roteador Incluso</td>
                    <td>Roteador Incluso</td>
                    <td>Roteador Incluso</td>
                </tr>
                <tr>
                    <td>Prime Video</td>
                    <td>Prime Video</td>
                    <td>Paramount Plus</td>
                    <td>Disney+</td>
                    <td>HBO Max</td>
                    <td>Disney+ e HBO Max</td>
                </tr>
                <tr>
                    <td>Vel. Down. 12 Mb/s</td>
                    <td>Vel. Down. 23 Mb/s</td>
                    <td>Vel. Down. 48 Mb/s</td>
                    <td>Vel. Down. 73 Mb/s</td>
                    <td>Vel. Down. 98 Mb/s</td>
                    <td>Vel. Down. 122 Mb/s</td>
                </tr>
                <tr>
                    <td>Vel. Up. 8 Mb/s</td>
                    <td>Vel. Up. 16 Mb/s</td>
                    <td>Vel. Up. 32 Mb/s</td>
                    <td>Vel. Up. 60 Mb/s</td>
                    <td>Vel. Up. 72 Mb/s</td>
                    <td>Vel. Up. 90 Mb/s</td>
                </tr>
                <tr>
                    <td>R$ 69,90</td>
                    <td>R$ 79,90</td>
                    <td>R$ 99,90</td>
                    <td>R$ 119,90</td>
                    <td>R$ 139,90</td>
                    <td>R$ 169,90</td>
                </tr>

            </table>

        </div>

        <a href="Revisao.php" class="myButton">Assine já</a>
        <a href="Revisao-Flex.php" class="myButton">Assine já</a>
        <a href="Revisao-Plus.php" class="myButton">Assine já</a>
        <a href="Revisao-Master.php" class="myButton">Assine já</a>
        <a href="Revisao-Pro.php" class="myButton">Assine já</a>
        <a href="Revisao-Ultimate.php" class="myButton">Assine já</a>

        <div class="avisos">
            * Velocidade de Download e upload é alcançada somente com o cabo.
            <br>
            * A velocidade por wifi poderá variar.
            <br>
            * Todos os planos são com internet ilimitada.
        </div>
        <br>


        <h2>Outros serviços</h2>

        <div class="img-prod">
            <img src="Imagens/outros-serviços.png" alt="outros serviços" width="200" height="200">
        </div>
        <div class="servicos">
            <ul>
                <li>Manutenção preventiva ==> R$ 45,00</li>
                <li>Manutenção corretiva ===> R$ 60,00</li>
                <li>Reparação do sistema ===> R$ 40,00</li>
            </ul>
        </div>

        <?php
        include_once("footer.php")
        ?>
    </div>
</body>

</html>