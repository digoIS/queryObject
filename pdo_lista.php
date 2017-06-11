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
            $stm = $connect->prepare("SELECT codigo, nome FROM famosos");
            $stm->execute();
            $result = $stm->setFetchMode(PDO::FETCH_OBJ);
            foreach(new RecursiveArrayIterator($stm->fetchAll()) as $row) { 
                echo $row->codigo. " - ".
                     $row->nome."<br>";
            }
        $connect = null;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            print "Erro!: ".$exc->getMessage()."<br>";
            die();
        }
       
        ?>
    </body>
</html>
