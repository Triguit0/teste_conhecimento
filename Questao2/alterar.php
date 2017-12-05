<?php
$con = mysqli_connect('localhost', 'root','','banco_email');

if (isset($_POST['alterar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE email SET email = '$email' WHERE nome = '$nome'";

    $res = mysqli_query($con,$sql);
    if ($res)
    {
        $msg = 'E-Mail alterado com sucesso.';
        ?>
        <script type="text/javascript">
            var mensagem = "<?php echo $msg;?>";
            alert(mensagem);
            location.href = "index.html";
        </script>
        <?php
    } else {
        $msg = 'Falha ao alterar o E-Mail.';
        ?>
        <script type="text/javascript">
            var mensagem = "<?php echo $msg;?>";
            alert(mensagem);
            location.href = "index.html";
        </script>
        <?php
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alteração de E-Mail</title>
    <link href="estilo2.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h3>Alteração de E-Mail</h3>
    <form action="alterar.php" method="post" enctype="multipart/form-data" name="alterar">
        <div class='form'>
            <input class="inputform" type="text" placeholder="Nome" name="nome"/>
            <br>
            <input class="inputform" type="text" placeholder="E-Mail" name="email"/>
            <br>
            <input class="inputform" type='submit' value='Alterar' name="alterar"/>
        </div>
    </form>
</body>
</html>