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


        <div class="titulo">
            <h1>Cadastro</h1>
        </div>
        <form action="DadosCadastrados.php" method="post">
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="nome e sobrenome">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="usuario@email.com">
            </div>
            <div>
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" placeholder="(ddd)9XXXX-XXXX">
            </div>
            <div>
                <label for="datanasc">Data de nascimento</label>
                <input type="date" name="data" id="data">
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">
            </div>
            <div>

                <label for="estado">Estado</label>

                <select id="estados" name="estado" >
                    <option value="SL">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="DF">Distrito Federal</option>

                </select>
            </div>

            <div class="button">
                <button type="submit" class="success">Enviar</button>
                <button type="reset" class="danger">Limpar</button>
            </div>
        </form>


        <?php
        include_once("footer.php")
        ?>
    </div>

</body>

</html>