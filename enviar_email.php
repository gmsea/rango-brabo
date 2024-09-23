<?php

if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    
    $to = "gabriel.seabra93@hotmail.com";
    $subject = "Novo Cadastro - Rango Brabo";

    $message = "
    <html>
    <head>

        <title>Novo Cadastro</title>

    </head>
    <body>

        <p>Detalhes do Formulário: </p>
        <ul>
            <li><strong>Nome: </strong> $nome</li>
            <li><strong>E-mail: </strong> $email</li>
            <li><strong>CEP: </strong> $cep</li>
            <li><strong>Cidade: </strong> $cidade</li>
            <li><strong>Estado: </strong> $estado</li>
            <li><strong>Rua: </strong> $rua</li>
            <li><strong>Número: </strong> $numero</li>
            <li><strong>Complemento: </strong> $complemento</li>
        </ul>
    
        </body>
        </html>

    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
}

?>
