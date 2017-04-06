<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	    phpinfo();
		$a = new b();
    }
    public function xyz(){
        echo "just for test";
    }
}
