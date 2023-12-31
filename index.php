<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Licenciamento Ambiental</title>
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/Luann8/LPP-1.2-usuarios/main/icon.ico?token=GHSAT0AAAAAACG3LP2OWTGU3MSMQSRORH36ZIQXDRQ" type="image/x-icon">
<style>

    body {
        font-family: Arial, sans-serif;
        background-image: url("https://th.bing.com/th/id/R.2e7e2ab1b59a0d011f424adf5ef7790c?rik=kc%2bWOxG689xbDg&pid=ImgRaw&r=0");
        text-align: center;       
        margin: 0;
        padding: 0;
    }
    
    .formulario-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    label {
        display: block;
        margin-bottom: 8px;
    }
    
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
    }
    
    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    
    input[type="submit"]:hover {
        background-color: #45a049;
    }

</style>

</head>
<body>
<div class="formulario-container">
<h><img src="https://raw.githubusercontent.com/Luann8/LPP-1.2-usuarios/main/meio-Ambiente.png" alt="logo"></h>
        <h2>Formulário de Licenciamento Ambiental</h2>
        <form action="processar_formulario.php" method="post">
            <div class="form-group">
                <label for="tipo-licenca">Tipo de Atividade:</label>
                <select id="tipo-licenca" name="tipo-licenca" required>
                    <option value="" disabled selected hidden>Selecione o Tipo de Licença</option>
                    <option value="LP">Licença Prévia (LP)</option>
                    <option value="LI">Licença de Instalação (LI)</option>
                    <option value="LO">Licença de Operação (LO)</option>
                    <option value="AA">Autorização Ambiental (AA)</option>
                    <option value="SupressaoVegetal">Autorização para Supressão Vegetal</option>
                    <option value="UsoFogoControlado">Autorização para Uso do Fogo Controlado</option>
                    <option value="TransporteMateriaPrima">Autorização para Transporte de Matéria-Prima de Origem Florestal</option>
                    <option value="CadastroConsumidores">Cadastro e Registro dos Consumidores de Matéria-Prima de Origem Florestal</option>
                    <option value="CadastroAgrotoxicos">Cadastro de Produtos Agrotóxicos Comercializados no Estado</option>
                    <option value="RegistroEstabelecimento">Registro do Estabelecimento Comercializador ou Utilizador de Agrotóxico</option>
                </select>
            </div>

            <div class="form-group">
                <label for="porte">Porte:</label>
                <input type="text" id="porte" name="porte" required>
            </div>

            <div class="form-group">
                <label for="localizacao">Localização:</label>
                <input type="text" id="localizacao" name="localizacao" required>
            </div>

            <div class="form-group">
                <label for="descricao-atividade">Descrição da Atividade:</label>
                <textarea id="descricao-atividade" name="descricao-atividade" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="descricao-processo">Descrição detalhada do processo produtivo:</label>
                <textarea id="descricao-processo" name="descricao-processo" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="justificativa-supressao">Justificativa para a supressão de vegetação:</label>
                <textarea id="justificativa-supressao" name="justificativa-supressao" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="area-suprimida">Área a ser suprimida:</label>
                <input type="text" id="area-suprimida" name="area-suprimida" required>
            </div>

            <div class="form-group">
                <label for="quantidade-vegetacao">Quantidade de vegetação a ser suprimida:</label>
                <input type="text" id="quantidade-vegetacao" name="quantidade-vegetacao" required>
            </div>

            <div class="form-group">
                <label for="tipo-vegetacao">Tipo de vegetação a ser suprimida:</label>
                <input type="text" id="tipo-vegetacao" name="tipo-vegetacao" required>
            </div>

            <div class="form-group">
                <label for="estudos-planos">Indicação dos estudos e planos ambientais:</label>
                <textarea id="estudos-planos" name="estudos-planos" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="declaracao-ciencia">Declaração de ciência e responsabilidade:</label>
                <textarea id="declaracao-ciencia" name="declaracao-ciencia" rows="4" required></textarea>
            </div>
<br>
            <div class="form-group">
                <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoLicenca = $_POST["tipo-licenca"];
        
    echo "Tipo de Licença selecionada: " . $tipoLicenca;
} else {
    header("Location: formulario.html");
    exit();
}
?>