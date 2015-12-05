<?php
/**
 * Queue.
 * User: zhouxiuhu
 * Date: 12/6/15
 * Time: 1:56 AM
 */
class Item{
    public $data = null;
    public $next = null;
    public $prev = null;

    public function __construct($data){
        $this->data = $data;
    }
}

class Queue{
    protected $_head = null;
    protected $_tail = null;

    public function insert($data){
        $item = new Item($data);

        if ($this->_head == null){
            $this->_head = $item;
            $this->_tail = $item;
        }else{
            $this->_head->prev = $item;
            $item->next = $this->_head;
            $this->_head = $item;
        }
    }
    public function delete(){
        if ($this->_tail){
            $item = $this->_tail;
            $this->_tail = $this->_tail->prev;
            $this->_tail->next = null;
            $data = $item->data;
            $item = null;
            if ($this->_tail == null){
                $this->_head = null;
            }
            return $data;
        }
        return false;
    }
    public function __toString(){
        $output = "";
        $item = $this->_head;
        while($item){
            $output .= $item->data . "  ";
            $item = $item->next;
        }
        return $output . "\n";
    }
}