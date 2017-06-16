<?php
require_once 'classes/Connection.php';
require_once 'classes/Transaction.php';
require_once 'classes/SQLInstrucion.php';
require_once 'classes/SQLSelect.php';
require_once 'classes/Expression.php'; 
require_once 'classes/Filter.php';
require_once 'classes/Criteria.php'; 

try {
    Transaction::open('livro');
    
    // obtém a conexão ativa
    $conn = Transaction::get();
    
    $criteria = new Criteria();
    $criteria->setProperty('order', 'codigo');
    
    $consulta = new SQLSelect();
    $consulta->setEntity('famosos');
    $consulta->setCriteria($criteria);
    $consulta->addColumn('DISTINCT nome');
    $consulta->addColumn("codigo");
    $resultSet = $conn->query($consulta->getInstruction());
    if($resultSet):
        $rows = $resultSet->fetchAll(PDO::FETCH_OBJ);
        foreach($rows as $row) { 
            echo $row->codigo. " - ".
            $row->nome."<br>";
        }
    endif;
    Transaction::close();
}
catch (Exception $e) {
    Transaction::rollback();
    print $e->getMessage();
}