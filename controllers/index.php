<?php

class Index extends Controller
{

    function __construct()
    {
//        echo "we are in index controller!<br>";
    }

    function index()
    {
        $HorizontalSlider = $this->model->getHorizontalSlider();
        $VerticalSlider = $this->model->getVerticalSlider();
        $VerticalSliderItems = $VerticalSlider[0];
        $date_end = $VerticalSlider[1];
        $mostView = $this->model->mostView();
        $params = [$HorizontalSlider, $VerticalSliderItems, $date_end, $mostView];

        $this->View('index/index', $params);
    }

    function sayhello()
    {
        echo 'we are in sayhello method!';
    }

    function FullName($name = "", $family = "", $age = "")
    {
        echo $family . '<br>';
        echo $name . '<br>';
        echo $age . '<br>';
    }


}


?>