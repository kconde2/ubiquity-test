<?php

namespace controllers;

/**
 * Controller DefaultController
 * @route("/hello","automated"=>true)
 **/
class DefaultController extends ControllerBase
{

    public function index()
    {
    }

    /**
     * @route("to/{name}/")
     */
    public function sayHello($name)
    {
        echo 'Hello ' . $name . '!';
    }


    /**
     * @route("info/{title}/{message}")
     */
    public function information($title, $message = 'nothing')
    {
        $this->loadView('DefaultController/information.html', compact('title', 'message'));
    }
}
