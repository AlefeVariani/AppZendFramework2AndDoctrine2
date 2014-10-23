<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TesteController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function TesteAction()
    {
        return new ViewModel();
    }
}
