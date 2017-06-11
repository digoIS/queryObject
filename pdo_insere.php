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
        try {
            $connect = new PDO("mysql:host=$ServerName;dbname=livro", $UserName, $Password);
            $connect->exec("INSERT INTO famosos (codigo, nome) VALUES (1,'Érico Veríssimo')");
            $connect->exec("INSERT INTO famosos (codigo, nome) VALUES (2,'John Lennon')");
            $connect->exec("INSERT INTO famosos (codigo, nome) VALUES (3,'Mahatma Gandhi')");
            $connect->exec("INSERT INTO famosos (codigo, nome) VALUES (4,'Ayrton Senna')");
            $connect->exec("INSERT INTO famosos (codigo, nome) VALUES (5,'Charlie Chaplin')");
            $connect->exec("INSERT INTO famosos (codigo, nome) VALUES (6,'Anita Garibaldi')");
            $connect->exec("INSERT INTO famosos (codigo, nome) VALUES (7,'Mário Quintana')");
            $connect = null;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            print "Erro!: ".$exc->getMessage()."<br>";
            die();
        }

        
        ?>
    </body>
</html>
