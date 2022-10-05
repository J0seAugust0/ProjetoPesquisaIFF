<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Upload Documento</title>
    </head>
    <body>
        <h1>Salvar Documento</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <label>Documento</label>
            <input type="file" name="documento" accept="application/pdf"><br><br>
            
            <input name="EnviarDocumento" type="submit" value="Salvar">
        </form>
		<hr>
		<?php
		include("download.php");
        ?>
    </body>
</html>
