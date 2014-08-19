<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto fase 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fase1.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <?php require_once('menu.php'); ?>

    <?php
    if (!$_POST AND !$_GET) {
        require_once('home.php');
    } elseif ($_GET) {
        if (file_exists($_GET['pagina'])) {
            require_once($_GET['pagina']);
        } else {
            require_once('erro.php');
        }
    } elseif ($_POST) {
        ?>
        <div class="panel panel-default">
            <div class="panel-body">
                Dados enviados com sucesso, abaixo seguem os dados que você enviou
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Informações Formulario</h3>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><strong>Nome:</strong> <?php echo $_POST['nome']; ?></li>
                <li class="list-group-item"><strong>Email:</strong>  <?php echo $_POST['email']; ?></li>
                <li class="list-group-item"><strong>Assunto:</strong> <?php echo $_POST['assunto']; ?></li>
                <li class="list-group-item"><strong>Mensagem:</strong> <?php echo $_POST['mensagem']; ?></li>

            </ul>
        </div>

    <?php } ?>

    <?php require_once('footer.php'); ?>

</div>

</body>
</html>
