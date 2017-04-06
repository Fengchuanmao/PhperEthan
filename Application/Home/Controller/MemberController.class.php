<?php
namespace Home\Controller;
use Think\Controller;
class MemberController extends Controller {
    public function index(){
        var_dump(456);
    }
    public function num($x){
	var_dump('hahaha');
	var_dump($x);
    }
}
