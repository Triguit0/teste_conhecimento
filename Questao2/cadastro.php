<?php
$con = mysqli_connect('localhost', 'root','','banco_email');
if (isset($_POST['cadastrar'])) {

    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d H:i');
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO email (nome, email, datahora)
                    VALUES ('$nome','$email','$date')";

    $res = mysqli_query($con,$sql);

    if ($res)
    {
        $msg = 'E-Mail cadastrado com sucesso.';
        ?>
        <script type="text/javascript">
            var mensagem = "<?php echo $msg;?>";
            alert(mensagem);
            location.href = "index.html";
        </script>
        <?php
    } else {
        $msg = 'Falha ao cadastrar o E-Mail.';
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
    <title>Cadastro de E-Mail</title>
    <link href="estilo2.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h3>Cadastro de E-Mail</h3>
    <form action="cadastro.php" method="post" enctype="multipart/form-data" id="cadastro">
        <div class='form'>
            <input class="inputform" type="text" placeholder="Nome" name="nome"/>
            <br>
            <input class="inputform" type="text" placeholder="E-Mail" name="email" id="email"/>
            <br>
            <input class="inputform" type='submit' value='Cadastrar' name="cadastrar"/>
        </div>
    </form>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery.validate.min.js"></script>
<script>
    $(function(){
        $("#cadastro").validate({
            rules: {
                email: {
                    email:true
                }
            },
            messages: {
                email:{
                   email: "Endereço de E-Mail inválido"
                }
            }
        });
    });
</script>
