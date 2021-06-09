<?php
require './banco/conexao.php';

$sql = "SELECT PES_ID, PES_IMG FROM pessoa";
$result = $mysqli->query($sql);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Selecione uma imagem para upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<img src=' {$row["PES_IMG"] }' title='' width='200' height='200'>";
            }
        } else {
            echo "0 results";
        }
        ?>

    </body>
</html>
