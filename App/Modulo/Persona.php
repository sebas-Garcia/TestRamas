<?php


namespace App\Modulo;


class Persona{

    private $Nombre;
    private $Apellido;
    private $telefono;
    private $Direccion;

    /**
     * Persona constructor.
     * @param $Nombre
     * @param $Apellido
     * @param $telefono
     * @param $Direccion
     */
    public function __construct($Nombre, $Apellido, $telefono, $Direccion)
    {
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->telefono = $telefono;
        $this->Direccion = $Direccion;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->Apellido;
    }

    /**
     * @param mixed $Apellido
     */
    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Direccion
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }
    public function MostrarDatos()
    {
        echo "<ul class=\"list-group list-group-flush\">";
        echo  "<li class=\"list-group-item\"><strong> Nombre:</strong>".$this-> getNombre()."</li>";
        echo  "<li class=\"list-group-item\"><strong> Apellido:</strong>".$this -> getApellido()."</li>";
        echo  "<li class=\"list-group-item\"><strong> Telefono:</strong>" .$this -> getTelefono()."</li>";
        echo  "<li class=\"list-group-item\"><strong> Direccion:</strong>" .$this -> getDireccion()."</li>";
        echo"</ul>";
    }

}