<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $ServerName = "localhost";
        $UserName = "root";
        $Password = "";
        $DBName = "livro";
        
        $connect = new mysqli($ServerName, $UserName, $Password, $DBName);
        $query = 'SELECT codigo, nome FROM famosos';
        $result = $connect->query($query);
        
        if($result):
            while ($row = $result->fetch_assoc()):
                echo 'Codigo: '.$row["codigo"] ." - ". "Nome: ".$row["nome"]."<br>";
            endwhile;
        endif;
        
        $connect->close();
        ?>
    </body>
</html>
