<?php
/*
@File Name  :       unique_rand_num.php
@Author     :       Nahid Bin Azhar
@Author Url :       http://fb.me/nahid.co

***********************************************

@Function   randUniqueNum
@Param      $min (int)
@Param      $max (int)
@Param      $limit (int)

*/
function randUniqueNum($min, $max=null, $limit=null){
    $maxNew=@is_null($max)?$min:$max;
    $min=@is_null($max)?0:$min;
    
    
    
    
    if($limit==null){
        return rand($min, $maxNew);   
    }else{
        if(($maxNew-$min)+1<$limit){
            return false;   
        }
        $rand=array();
        
        while(count($rand)<$limit){
            $randValue=rand($min, $maxNew);
                if(!in_array($randValue, $rand)){
                        $rand[]=$randValue;
                }

        }
       return $rand; 
    }
       
       
        
   return false;     
       
}


$rand=randUniqueNum(7, 10, 4);

echo $rand[0].' '.$rand[1].' '.$rand[2].' '.$rand[3];