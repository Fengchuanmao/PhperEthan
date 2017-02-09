<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	$res = mysqli_connect("127.0.0.1","root","");
	var_dump($res);
	phpinfo();
    }
}
