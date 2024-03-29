<?php

require 'vendor/autoload.php'; // Inclua o arquivo autoload.php gerado pelo Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if (isset($_POST['nomeEmpresa']) && !empty($_POST['nomeEmpresa'])) {
    $nomeEmpresa = $_POST['nomeEmpresa'];
}

if (isset($_POST['solicitanteEvento']) && !empty($_POST['solicitanteEvento'])) {
    $solicitanteEvento = $_POST['solicitanteEvento'];
}

if (isset($_POST['telefoneCliente']) && !empty($_POST['telefoneCliente'])) {
    $telefoneCliente = $_POST['telefoneCliente'];
}

if (isset($_POST['nomeEvento']) && !empty($_POST['nomeEvento'])) {
    $nomeEvento = $_POST['nomeEvento'];
}
if (isset($_POST['descricaoEvento']) && !empty($_POST['descricaoEvento'])) {
    $descricaoEvento = $_POST['descricaoEvento'];
}
if (isset($_POST['eventoTelefone']) && !empty($_POST['eventoTelefone'])) {
    $eventoTelefone = $_POST['eventoTelefone'];
}

if (isset($_POST['eventoCep']) && !empty($_POST['eventoCep'])) {
    $eventoCep = $_POST['eventoCep'];
}

if (isset($_POST['eventoData']) && !empty($_POST['eventoData'])) {
    $eventoData = $_POST['eventoData'];
}

if (isset($_POST['eventoBegin']) && !empty($_POST['eventoBegin'])) {
    $eventoBegin = $_POST['eventoBegin'];
}

if (isset($_POST['eventoEnd']) && !empty($_POST['eventoEnd'])) {
    $eventoEnd = $_POST['eventoEnd'];
}

$mjH_t32ga = 'Lks@#*(8948@';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'mail.locarestruturas.com.br';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'site@locarestruturas.com.br';
$mail->Password = $mjH_t32ga; 
$mail->Port = 587;

$mail->setFrom('site@locarestruturas.com.br', 'Contato');
$mail->addAddress('atendimento@locarestruturas.com.br');

$mail->isHTML(true);
$mail->Subject = 'Orcamento - Site';

$mail->Body = "<b>Dados do Solicitante</b> <br>";

$mail->Body .= "Nome da Empresa: $nomeEmpresa <br>";
$mail->Body .= "Solicitante do Evento: $solicitanteEvento <br>";
$mail->Body .= "Telefone do Cliente: $telefoneCliente <br>";

$mail->Body .= "<b>Dados do Evento</b><br>";

$mail->Body .= "Nome do Evento: $nomeEvento <br>";
$mail->Body .= "Descrição do Evento: $descricaoEvento <br>";
$mail->Body .= "Telefone do Evento: $eventoTelefone <br>";
$mail->Body .= "CEP do Evento: $eventoCep <br>";
$mail->Body .= "Data do Evento: $eventoData <br>" ;
$mail->Body .= "Início do Evento: $eventoBegin <br>";
$mail->Body .= "Fim do Evento: $eventoEnd <br>";



// $mail->AltBody = nl2br(strip_tags($mensagem));

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo '<script>alert(\'Solicitação de orçamento enviada com sucesso!\');</script>';
    header('Location: index.html');
    exit(); // Adicione exit() para parar a execução após o redirecionamento
}

?>