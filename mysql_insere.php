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
        
        if($connect->connect_error):
            die("Conexao falhou: ". $connect->connect_error);
        endif;
        echo "Conectada com sucesso";
    
        $connect->query("INSERT INTO famosos (codigo, nome) VALUES (1,'Érico Veríssimo')");           
        $connect->query("INSERT INTO famosos (codigo, nome) VALUES (2,'John Lennon')");
        $connect->query("INSERT INTO famosos (codigo, nome) VALUES (3,'Mahatma Gandhi')");
        $connect->query("INSERT INTO famosos (codigo, nome) VALUES (4,'Ayrton Senna')");
        $connect->query("INSERT INTO famosos (codigo, nome) VALUES (5,'Charlie Chaplin')");
        $connect->query("INSERT INTO famosos (codigo, nome) VALUES (6,'Anita Garibaldi')");
        $connect->query("INSERT INTO famosos (codigo, nome) VALUES (7,'Mário Quintana')");
        
        
        
        $connect->close();
        
        ?>
    </body>
</html>
