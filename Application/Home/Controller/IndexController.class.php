<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	phpinfo();
    }
    public function console_log($data)
    {
   	echo "<script>";
	echo 'console.log('.json_encode($data).')';
	echo "</script>";
    }
    public function add(&$a)
    {
     	$a = 5;
	   
    }
}
