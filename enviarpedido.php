<?php
$nome = strip_tags(trim($_POST["nome"]));
$email = strip_tags(trim($_POST["email"]));
$tel = strip_tags(trim($_POST["tel"]));
$cel = strip_tags(trim($_POST["cel"]));
$data = strip_tags(trim($_POST["data"]));
$end = strip_tags(trim($_POST["end"]));
$compl = strip_tags(trim($_POST["compl"]));
$numero = strip_tags(trim($_POST["numero"]));

$endereco = $end . " Nº " . $numero . " - " . $compl;

$kit = strip_tags(trim($_POST["kit"]));
$bolo = strip_tags(trim($_POST["bolo"]));
$obs = strip_tags(trim($_POST["obs"]));


$to = "contato@marjobolos.com.br, mjnogueira@brq.com";
//$to = "pedro.nogueira2@hotmail.com";
$subject = "Pedido Kit Festa Fácil";
$msg = "";

$headers = "From: \"$nome\"<$email>\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

$message = "
    
Pedido realizado através do site Kit Festa Fácil para entrega no dia <b>$data.</b>
    <br/><br/>
<b>Dados do Pedido:</b> <br/><br/>

    <b>Cliente:</b> $nome<br/>
    <b>Email: </b>$email<br/>
    <b>Tel: </b>$tel<br/><br/>
    <b>Cel: </b>$cel<br/><br/>
    
    <b>Endereço:</b> $endereco<br/>
    <b>Kit :</b> $kit<br/><br/>
    <b>Bolo :</b> $bolo<br/><br/>
    <b>Observações:</b> <br/>
    $obs
";

if ($nome != "") {

    mail($to, $subject, $message, $headers);

    $msg = "Pedido enviado com sucesso. Aguarde contato de nossa equipe para confirmação de endereço e horário de entrega.";
} else {

    $msg = "Erro ao enviar pedido. Favor preencher todos os campos.";
}
?>

<script type="text/javascript">
    alert('<?php echo $msg ?>');
    location.href = "contato.php";
</script>   
