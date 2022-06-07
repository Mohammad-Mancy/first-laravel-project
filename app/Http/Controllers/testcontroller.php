<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nette\Utils\DateTime;

class testcontroller extends Controller{
    public function getTeamOfTwo(){
        $students=array('ali','joe','hassan','maria','mahdi','nada','nadia','charbel');
        $length=sizeof($students);
        if($length%2!==0){
            $length=$length-1;
            array_push($teams, $students[$length]);
        }
        $choices=array();
        $teams=array();
        for($i=0;$i<$length;$i++){
            $c1=rand(0,$length-1);
            $c2=rand(0,$length-1);
            if(sizeof($choices)<=$length){
            while(in_array($c1,$choices)) {
                $c1=rand(0,$length-1);
            }
            while(in_array($c2,$choices)) {
                $c2=rand(0,$length-1);
            }}
            array_push($choices,$c1,$c2);
            array_push($teams, $students[$c1],$students[$c2]);
        }
        echo json_encode($teams);
    }
    public function getPalin(){
        $arr = array('abc','cac','brb','lol','asdsa','ascssss');
        $n = count($arr);
        // echo "hi";
        echo $this->palindrome($arr,$n);
    }
    public function palindrome($arr,$n){
        $number_of_palin=0;
        for($i=0;$i<$n;$i++){
            if($this->ispalin($arr[$i]===true)){
                $number_of_palin+=1;
            }
        }
        return $number_of_palin;
    }
    public function ispalin($str){
        $l=0;
        $r=strlen($str)-1;
        while($r>$l){
            if($str[$l]!==$str[$r]){
                return false;
            }
            $l+=1;
            $r-=1;
        }
        return true;
    }
    //different time method
    public function getseconds(){
        $start = new DateTime('1732-04-14 00:00:00');
        $end = new DateTime();

        echo $end->getTimestamp() - $start->getTimestamp(); // output: in seconds

    }
}