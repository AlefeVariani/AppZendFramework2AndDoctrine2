<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\Bandas as FormBanda;
use Application\Model\Bandas as ModelBanda;

class BandasController extends AbstractActionController
{
	private function getObjectManager()
	{
		return $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
	}

	public function indexAction() 
	{
		$title = 'Lista de Bandas';
		$titleButton = 'Cadastrar';
		$query = $this->getObjectManager()
					  ->createQuery("SELECT b.id,
					  						b.nome_banda, 
					  						b.desc_banda, 
					  						b.data_cadastro, 
					  						CONCAT('Número de ',b.num_integrantes_banda, ' integrantes') AS num_inte_banda 
									 FROM Application\Model\Bandas b ORDER BY b.nome_banda ASC"
									);
		$bandasResult = $query->getArrayResult();

		return new ViewModel(array(
			'bandas' => $bandasResult,
			'title'  => $title,
			'titleButton' => $titleButton
			));
	}

	public function saveAction()
	{
		$titleSave = 'Cadastro de Bandas:';
		$request = $this->getRequest();
		$formBanda = new FormBanda();

		if ($request->isPost()) {
			$values = $request->getPost();
			
			$data_atual = new \DateTime();
			$formBanda->setData($values);

			if ($formBanda->isValid()) {
				$modelBanda = new ModelBanda();
				$modelBanda->setNomeBanda($values['nome_banda']);
				$modelBanda->setDescBanda($values['desc_banda']);
				$modelBanda->setNumIntegrantesBanda($values['num_integrantes_banda']);
				$modelBanda->setDataCadastro($data_atual);
				$this->getObjectManager()->persist($modelBanda);
			}
			try {
				$this->getObjectManager()->flush();
				return $this->redirect()->toUrl('/application/bandas');
			} catch (\Exception $e) {
				return $this->redirect()->toUrl('/application/bandas');
			}
		}
		return new ViewModel(array(
			'form' => $formBanda,
			'title' => $titleSave
			));
	}

	public function updateAction()
	{

	}

	public function deleteAction()
	{
		$id = (int) $this->params()->fromRoute('id', 0);

		if ($id > 0)
			$banda = $this->getObjectManager()->find('Application\Model\Bandas', $id);
			$this->getObjectManager()->remove($banda);
			try {
				$this->getObjectManager()->flush();
				$this->flashMessenger()->addSuccessMessage('Banda excluida com Sucesso!!!');
			} catch (\Exception $e) {
				$this->flashMessenger()->addErrorMessage('Ocorreu um erro, banda não foi excluida!');
			}
		return $this->redirect()->toUrl('/application/bandas');
	}
}