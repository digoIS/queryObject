<?php

/**
 * SQLInstrucion [TIPO]
 * Descricao
 * @copyright (c) year, Diego F. Garcia
 */
abstract class SQLInstrucion {
    //put your code here
    protected $sql;         //Armazena a instrução SQL.
    protected $criteria;    //Armazena o objeto criterio.
    
    final public function setEntity($entity){
        $this->entity = $entity;
    }
    final public function getEntity(){
        return $this->entity;
    }
    public function setCriteria(Criteria $criterio){
        $this->criteria = $criterio;
    }
    abstract function getInstruction();
}
