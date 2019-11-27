<?php


namespace App\Modelo;


class Carro
{
    private $Marca;
    private $Modelos;
    private $Tipo;
    private $Color;

    /**
     * Carro constructor.
     * @param $Marca
     * @param $Modelos
     * @param $Tipo
     * @param $Color
     */
    public function __construct($Marca, $Modelos, $Tipo, $Color)
    {
        $this->Marca = $Marca;
        $this->Modelos = $Modelos;
        $this->Tipo = $Tipo;
        $this->Color = $Color;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->Marca;
    }

    /**
     * @param mixed $Marca
     */
    public function setMarca($Marca)
    {
        $this->Marca = $Marca;
    }

    /**
     * @return mixed
     */
    public function getModelos()
    {
        return $this->Modelos;
    }

    /**
     * @param mixed $Modelos
     */
    public function setModelos($Modelos)
    {
        $this->Modelos = $Modelos;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * @param mixed $Tipo
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param mixed $Color
     */
    public function setColor($Color)
    {
        $this->Color = $Color;
    }

    public function mostrarDatos()
    {


        echo "<li class=\"list-group-item\"><strong>Marca: </strong>".$this->getMarca()."</li>";
        echo "<li class=\"list-group-item\"><strong>Modelo: </strong>".$this->getModelos()."</li>";
        echo "<li class=\"list-group-item\"><strong>Tipo: </strong>".$this->getTipo()."</li>";
        echo "<li class=\"list-group-item\"><strong>Color: </strong>".$this->getColor()."</li>";
        echo "</ul>";
    }

}

