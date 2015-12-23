<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        echo M('Goods')->add(array('title'=>'aaaaaaaaaaa'));
    }
}