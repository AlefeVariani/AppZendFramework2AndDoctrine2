<?php
namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
 * @ORM\Table(name="bandas")
 */
class Bandas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $nome_banda;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $desc_banda;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $num_integrantes_banda;

    /** 
     * @ORM\Column(type="datetime") 
     */
    protected $data_cadastro;

    /**
     * @param integer
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string
     */
    public function setNomeBanda($nome_banda)
    {
        $this->nome_banda = $nome_banda;
    }

    /**
     * @param string
     */
    public function setDescBanda($desc_banda)
    {
        $this->desc_banda = $desc_banda;
    }

    /**
     * @param integer
     */
    public function setNumIntegrantesBanda($num_integrantes_banda)
    {
        $this->num_integrantes_banda = $num_integrantes_banda;
    }

    /**
     * @param datetime
     */
    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNomeBanda()
    {
        return $this->nome_banda;
    }

    /**
     * @return integer
     */
    public function getNumIntegrantesBanda()
    {
        return $this->num_integrantes_banda;
    }

    /**
     * @return string
     */
    public function getDescBanda()
    {
        return $this->desc_banda;
    }

    /**
     * @return datetime
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }
}
