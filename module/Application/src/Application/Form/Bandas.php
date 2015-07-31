<?php
namespace Application\Form;

use Zend\Form\Form;

class Bandas extends Form
{
    public function __construct()
    {
        parent::__construct('bandas');

        $this->setAttribute('method', 'POST');
        $this->setAttribute('action', '');

        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'nome_banda',
            'type' => 'text',
            'options' => [
                'label' => 'Nome da Banda: '
            ]
        ]);

        $this->add([
            'name' => 'desc_banda',
            'type' => 'textarea',
            'options' => [
                'label' => 'Descrição da Banda: '
            ]
        ]);

        $this->add([
            'name' => 'num_integrantes_banda',
            'type' => 'select',
            'options' => [
                'label' => 'Número de Integrantes da Banda: ',
                'empty_option' => 'Quantos são? ',
                'value_options' => [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10'
                ]
            ]
        ]);
    }
}
