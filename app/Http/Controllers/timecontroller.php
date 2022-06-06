<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;

class timecontroller extends Controller{
    public function getseconds(){
        $start = new DateTime('1732-04-14 00:00:00');
        $end = new DateTime();

        echo $end->getTimestamp() - $start->getTimestamp(); // output: in seconds

    }
}