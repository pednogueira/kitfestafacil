<?php
$email = strip_tags(trim($_POST["email"]));
$msg = "";

if ($email != "") {

    $msg = "Email cadastrado com sucesso.";

    $arquivo = fopen("newsletter.txt", "a+");
    
    
    
    fwrite($arquivo, $email);
    fwrite($arquivo, "\n");

    fclose($arquivo);
} else {
    $msg = "Erro ao enviar o email.";
}
?>

<script type="text/javascript">
    alert("<?php echo $msg ?>");
    location.href = "index.php"
</script>   