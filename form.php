<?php

// Executa o formulário quando submetido
if (!empty($_POST)) {

    $nome = $_POST['nome'];
    $mensagem = " $nome!";

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulário</title>
</head>
<body>


<form action="form.php" method="post">
    <label for="field_nome" autocomplete="off">Nome</label>
    <input type="text" id="field_nome" name="nome" value="">
    <input type="submit" value="Enviar">
</form>

<?php if(!empty($mensagem)) : ?>
<p><?php echo $mensagem ?></p>
<?php endif; ?>



</body>
</html>