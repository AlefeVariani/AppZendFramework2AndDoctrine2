<?php
namespace ZealPro\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * Responsavel por funções que sejam usadas em todos os controller do modulo Application
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
