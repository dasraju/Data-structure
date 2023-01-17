<?php
declare(strict_types=1);

 class Linkedlist 
 {
    private $head;
    private $rear;
    private $secondLast;


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


    public function insertAfterSpecificNode($data,$target):void{
       if($this->head){
        $currentNode = $this->head;
        while($currentNode->getData() != $target && $currentNode->getNext() != null){
          $currentNode = $currentNode->getNext();
        }
        if($currentNode->getData() == $target){
          $newNode = new Node();
          $newNode->setData($data);
          $currentNodenext = $currentNode->getNext();
          $currentNode->setNext($newNode);
          $newNode->setNext($currentNodenext);

        }
       }
    }

    public function insertBeforeSpecificNode($data,$target):void{
      if($this->head){
        $previousNode = null;

        $currentNode = $this->head;
        while($currentNode->getData() != $target && $currentNode->getNext() != null){
          $previousNode = $currentNode;
          $currentNode = $currentNode->getNext();
        }
        if($currentNode->getData() == $target){
          $newNode = new Node();
          $newNode->setData($data);
          if($previousNode){
           $previousNode->setNext($newNode);
           $newNode->setNext($currentNode);
          }
          else{
            $previousNode = $newNode;
            $previousNode->setNext($currentNode);
            $this->head = $previousNode;
          }

        }
      }
    }

    public function deleteNode($target) : bool{
          if($this->head){
            $currentNode = $this->head;
            $previousNode = null;
        
          while($currentNode->getData() != $target && $currentNode->getNext() != null){
            $previousNode = $currentNode;
            $currentNode = $currentNode->getNext();
          }
          if($currentNode->getData() == $target){
            if($previousNode){
             $previousNode->setNext($currentNode->getNext());
             unset($currentNode);
            }else{
              $this->head = $currentNode->getNext();
              unset($currentNode);
            }
            return true;

          }
        }
        return false;
    }

    public function deleteFirstNode():void{
      if($this->head){
        $this->head = $this->head->getNext();
      }


    }
    
    public function deleteLastNode():void{
      if($this->head){
        $currentNode = $this->head;
        $previousNode = null;
          while($currentNode->getNext() != null){
            $previousNode = $currentNode;
            $currentNode = $currentNode->getNext();
          }
          if($previousNode){
            $previousNode->setNext(null);
            unset($currentNode);
          }
      }
    }

    public  function addLastWithoutWhile($data) :void{
       $newNode = new Node();
       $newNode ->setData($data);
       if($this->head){
           $this->secondLast = $this->rear;
           $this->rear->setNext($newNode);
           $this->rear = $this->rear->getNext();
       }else{
        $this->rear =  $this->head = $newNode;
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
   $linklist->addLastWithoutWhile(4);
   $linklist->addLastWithoutWhile(5);
   $linklist->addLastWithoutWhile(7);
  //  $linklist->insertAtBack(6);
  //  $linklist->insertAtBack(8);
  //  $linklist->insertAtBack(0);
   $linklist->printList();
  //  $linklist->deleteLastNode();
  //  $linklist->printList();
  //  $linklist->insertAtFront(4);
  //  $linklist->insertAtFront(6);
  //  $linklist->insertAtFront(8);
  //  $linklist->insertAtFront(0);
  //  $linklist->printList();

?>