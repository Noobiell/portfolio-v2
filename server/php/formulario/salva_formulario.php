<?php

if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    // Caso a solicitação não seja feita por meio de uma requisição AJAX, redirecione para outra página ou exiba uma mensagem de erro
    header('HTTP/1.0 403 Forbidden');
    die('Acesso proibido!');
}

include '../classes/formulario.php';
$obj = new FormClient();

if (strlen($_POST['message']) <= 250) {

    echo $obj->checkRegistration($_POST);
} else {

    echo json_encode(array("erro" => true, "mensagem" => "Mensagem com tamanho maior que o parmitido"));
}
