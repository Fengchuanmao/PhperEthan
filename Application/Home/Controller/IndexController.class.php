<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		var_dump(__DIR__);
		echo "123";
		phpinfo();
    }
    public function add()
    {
        var_dump(__LINE__);
        
    }
}
