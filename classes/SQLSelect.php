<?php

/**
 * SQLSelect [TIPO]
 * Descricao
 * @copyright (c) year, Diego F. Garcia
 */
class SQLSelect extends SQLInstrucion{
    private $columns;       //Array de colunas retornadas.
   
    public function addColumn($column){
        //Adiciona a coluna no Array.
        $this->columns[] = ' ' . $column;
    }

    public function getInstruction() {
        $this->sql .= ' SELECT ';
        $this->sql .= implode(',', $this->columns);
        $this->sql .= ' FROM ' . $this->entity;
        
        if ($this->criteria):
            $expression = $this->criteria->dump();
            if($expression):
                $this->sql .= ' WHERE ' . $expression;
            endif;
            $order  = $this->criteria->getProperty('order');
            $limit  = $this->criteria->getProperty('limit');
            $offset = $this->criteria->getProperty('offset');
            if($order):
                $this->sql .= ' ORDER BY '.$order;
            endif;
            if($limit):
                $this->sql .= ' LIMIT '.$limit;
            endif;
            if($offset):
                $this->sql .= ' OFFSET '.$offset;
            endif;
        endif;
        return $this->sql;
    }

}
