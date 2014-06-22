<?php

namespace Application\Form;

use Zend\Form\Form;
use Zend\Form\Element;

class Bandas extends Form {
	public function __construct()
	{
		parent::__construct('bandas');

		$this->setAttribute('method', 'POST');
		$this->setAttribute('action', '');

		$this->add(array(
			'name' => 'id',
			'type' => 'Hidden',
			));

		$this->add(array(
			'name' => 'nome_banda',
			'type' => 'Text',
			'options' => array(
				'label' => 'Nome da Banda: '
				),
			));

		$this->add(array(
			'name' => 'desc_banda',
			'type' => 'textarea',
			'options' => array(
				'label' => 'Descrição da Banda: '
				),
			));

		$this->add(array(
			'name' => 'num_integrantes_banda',
			'type' => 'Select',
			'options' => array(
				'label' => 'Número de Integrantes da Banda: ',
				'empty_option' => 'Quantos são? ',
				'value_options' => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
					'5' => '5',
					'6' => '6',
					'7' => '7',
					'8' => '8',
					'9' => '9',
					'10' => '10',
					),
				),
			));

		$this->add(array(
			'name' => 'submit',
			'type' => 'submit',
			'attributes' => array(
				'id' => 'submitbutton'
				),
			));

		$this->add(array(
			'name' => 'cancel',
			'type' => 'submit',
			'attributes' => array(
				'onclick' => "location.href='/application/bandas'"
				),
			));
	}
}