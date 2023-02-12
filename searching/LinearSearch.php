<?php
declare(strict_types=1);
class LinearSearch {
    public $arr;
    public int $elem;
    public string $response; 

   public function linearSearch():string
   {
     $arr =[1,2,3,4,5,6,7,8,9];
     $elem = 8;
    for($i=0; $i<count($arr); $i++){
        if((int)$arr[$i] == (int)$elem){
            $response = 'value found';
        }
        
    }
    return $response;

    
   }  



}
$instance = new LinearSearch();
 echo $instance->linearSearch();
?>