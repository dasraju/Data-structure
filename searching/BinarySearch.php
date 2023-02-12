<?php
// binary search apply only monotonic functions 
//increase or decrease
//2,7,9,12,16

class BinarySearch{

    public  int $mid;
      public function Binarysearch($arr, int $size, int $key){
        $start = 0;
        $end = $size;
        
        $mid = (int)(($start +$end)/2); 

        while($start <= $end){
             if($arr[$mid] == $key){
              return $mid;
             }
             if($arr[$mid] < $key){
                $start = $mid+1;
             }else{
                $end = $mid-1;
             }

             $mid = (int)(($start +$end)/2);
             // $mid = $start +($end-$start)/2;
        }
        return -1;

      }
}
$searchIns = new BinarySearch();
 $evenelems = array(2,3,4,5,6,7);
 $oddelems = array(1,2,3,5,6,7,8);
  $key = 3;
$evenindex =  $searchIns->Binarysearch($evenelems,count($evenelems),$key);
$oddindex =  $searchIns->Binarysearch($oddelems,count($oddelems),$key);
echo $evenindex;
echo $oddindex;
?>