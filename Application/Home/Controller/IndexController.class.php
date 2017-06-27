<?php
namespace Home\Controller;

use Think\Controller;
use Think\Build;

class IndexController extends Controller
{

    public function index()
    {
        
        Build::buildAppDir('Car');
        Build::buildController('Car','Index');
        
    }
}