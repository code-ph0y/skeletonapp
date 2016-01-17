<?php

namespace Application\Controller;

use Application\Controller\Shared as SharedController;
use PPI\Framework\Http\Request;

class Index extends SharedController
{
    /**
     * @return string
     */
    public function indexAction()
    {
        return $this->render('Application:index:index.html.php');
    }

    /*
    # pattern:  /example/{param1}/{param2}
    public function exampleAction($request, $param1, $param2)
    {
        // example stub with request
    }
    */
}
