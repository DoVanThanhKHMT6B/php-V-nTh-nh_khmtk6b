<?php
class Home extends Controller
{
    function displayIntroduction()
    {
        echo"hello";
    }
    function displayUser()
    {
        echo"welcome QN";
    }
    function displayIndex()
    {
        $this->view("master",[
            "Page"=>"home"
        ]);
    }
}
?>