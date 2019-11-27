<?php


namespace App\Modelos;


class Computador {

    private $Referencia;
    private $Marca;
    private $Color;
    private $Procesador;


    /**
     * Persona constructor.
     * @param $Referencia
     * @param $Marca
     * @param $Color
     * @param $Procesador
     */
    public function __construct($Referencia, $Marca, $Color, $Procesador)
    {
        $this->Referencia = $Referencia;
        $this->Marca = $Marca;
        $this->Color = $Color;
        $this->Procesador = $Procesador;

    }


    /**
     * @return mixed
     */
    public function getReferencia()
    {
        return $this->Referencia;
    }

    /**
     * @param mixed $Referencia
     */
    public function setReferencia($Referencia)
    {
        $this->Nombre = $Referencia;
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
    public function GetColor()
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

    /**
     * @return mixed
     */
    public function getProcesador()
    {
        return $this->Procesador;
    }

    /**
     * @param mixed $Procesador
     */
    public function setProcesador($Procesador)
    {
        $this->Procesador = $Procesador;
    }

    /**
     * @return mixed
     */


    public function MostrarDatos()
    {

        echo "<ul>";
        echo  "<li class=\"list-group-item\"></li><strong> Referencia:</strong>".$this-> getReferencia()."</li>";
        echo  "<li class=\"list-group-item\"> <strong> Marca:</strong>".$this -> getMarca()."</li>";
        echo  "<li class=\"list-group-item\"><strong> Color:</strong>" .$this -> getcolor()."</li>";
        echo  "<li class=\"list-group-item\"> <strong> Procesador:</strong>" .$this -> getProcesador()."</li>";

        echo"</ul>";
    }
}








