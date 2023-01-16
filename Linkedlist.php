<?php
declare(strict_types=1);

 class Linkedlist 
 {
    private $head;

    public function __construct(){
        $this->head = null;
    }

    public function insertAtBack($data):void{
        //making a new node
          $newNode = new Node();
        
          $newNode->setData($data);

          if($this->head){
            $currentNode = $this->head;
            //finding last node
            while($currentNode->getNext()!=null){
             $currentNode = $currentNode->getNext();
            }
            //new node assigning to previous last node->next
            $currentNode->setNext($newNode);
          }
          else{
            //lsit is empty so, new node will be the first node
            $this->head = $newNode;
          }
    }


    public function insertAtFront($data) :void{
       if($this->head){
        $newNode = new Node();
        $newNode->setData($data);
        $newNode->setNext($this->head);
        $this->head = $newNode;
       }
       else{
        $newNode = new Node();
        $newNode->setData($data);
        $this->head = $newNode;
       }

    }

    public function printList():void {
        $currentNode = $this->head;
        while($currentNode != null){
            echo $currentNode->getData();
            $currentNode = $currentNode->getNext();
           }
    }



 }

 class Node {
  private $data;
  private $next;

    public function __construct(){
        $this->data = 0;
    }

    public function setData($data) :void{
    $this->data = $data;
    }

    public function getData() :int{
        return $this->data;
    }

    public function setNext($next) :void{
        $this->next = $next;
    }

    public function getNext() {
        return $this->next;
    }
 } 

   $linklist = new Linkedlist();
//    $linklist->insertAtBack(4);
//    $linklist->insertAtBack(6);
//    $linklist->insertAtBack(8);
//    $linklist->insertAtBack(0);
//    $linklist->printList();
   $linklist->insertAtFront(4);
   $linklist->insertAtFront(6);
   $linklist->insertAtFront(8);
   $linklist->insertAtFront(0);
   $linklist->printList();

?>