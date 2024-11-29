<?php

class Project extends Controller
{

    public function index($a = '', $b = '', $c = '')
    {
        $this->view('projects');
    }
}
