<?php
$con = mysqli_connect('localhost', 'root','','banco_email');

if (isset($_POST['excluir'])) {
    $email = $_POST['email'];

    $sql = mysqli_query($con,"DELETE FROM email WHERE email = '" . $email . "'");
    if ($sql) {
        $msg = 'Email deletado com sucesso.';
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
    <title>Exclusao de E-Mail</title>
    <link href="estilo2.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h3>Exclusão de E-Mail</h3>
    <form action="exclusao.php" method="post" enctype="multipart/form-data" name="exclusao">
        <div class='form'>
            <input class="inputform" type="text" placeholder="E-Mail" name="email"/>
            <br>
            <input class="inputform" type='submit' value='Excluir' name="excluir"/>
        </div>
    </form>
</body>
</html>