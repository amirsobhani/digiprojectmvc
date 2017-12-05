<?php

class Index extends Controller
{

    function __construct()
    {

    }

    function index()
    {
        $HorizontalSlider = $this->model->getHorizontalSlider();
        $VerticalSlider = $this->model->getVerticalSlider();
        $VerticalSliderItems = $VerticalSlider[0];
        $date_end = $VerticalSlider[1];
        $mostView = $this->model->mostView();
        $lastProduct = $this->model->lastProduct();
        $params = [$HorizontalSlider, $VerticalSliderItems, $date_end, $mostView, $lastProduct];

        $this->View('index/index', $params);
    }


}


?>