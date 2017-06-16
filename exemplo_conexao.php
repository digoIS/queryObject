<?php
require_once 'classes/Connection.php';
try {
    $conn = Connection::open('livro');
    if($conn):
        echo 'Conectou';
    endif;
}
catch (Exception $e) {
    print $e->getMessage();
}