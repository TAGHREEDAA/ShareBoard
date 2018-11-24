<?php
/**
 * Created by PhpStorm.
 * User: taghreed
 * Date: 11/21/18
 * Time: 1:50 AM
 */

class Home extends Controller {

    protected function index(){
        $viewModel = new HomeModel();
        return $this->returnView($viewModel->index(),true);
    }
}