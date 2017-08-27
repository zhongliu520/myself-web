<?php
namespace App\Http\Controllers\Activity;
/**
 * Description of HomeController
 *
 * @author zhong
 */
class HomeController extends \App\Http\Controllers\Controller {
    
    public function index()
    {
        return view("activity.index");
    }
    
}
