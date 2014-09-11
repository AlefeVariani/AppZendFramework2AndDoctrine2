<?php

namespace ZealPro\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
* @author Alefe Variani
*/
class AbstractController extends AbstractActionController
{

	# Função responsavel instanciação do objeto Doctrine ORM
	public function getObjectManager()
	{
		return $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
	}

}
