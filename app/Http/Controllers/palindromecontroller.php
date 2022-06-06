<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pal extends Controller
{
    public function getPalin(){
        $arr = array('abc','cac','brb','lol','asdsa');
        $n = count($arr);
        echo "hi";
        // echo $this->palindrome($arr,$n);
    }
    public function palindrome($arr,$n){
        $number_of_palin=0;
        for($i=0;$i<$n;$i++){
            if($this->ispalin($arr[$i])){
                $number_of_palin+=1;
            }
        }
        return $number_of_palin;
    }
    public function ispalin($str){
        $l=0;
        $r=strlen($str)-1;
        while($r>$l){
            if($str[$l]>$str[$r]){
                return false;
            }
            $l+=1;
            $r-=1;
        }
        return true;
    }
}
