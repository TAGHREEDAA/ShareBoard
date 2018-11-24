<?php
/**
 * Created by PhpStorm.
 * User: taghreed
 * Date: 11/21/18
 * Time: 1:50 AM
 */

class Shares extends Controller {

    protected function index(){
        $viewModel = new ShareModel();
        $this->returnView($viewModel->index(),true);
    }

    protected function add(){
        if (isset($_SESSION['is_logged_in'])){
            $viewModel = new ShareModel();
            $this->returnView($viewModel->add(),true);
        }
        else{
            header('Location: '.ROOT_URL);
        }
    }
}