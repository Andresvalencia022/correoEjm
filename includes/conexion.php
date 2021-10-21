<?php
// $conexion=mysqli_connect("localhost","root","","correo");
// if($conexion->connect_error){
//     die ("error".$conexion->connect_error);
// }else{
//     echo "conexion exitosa";
// } 

 class Conexion
{
    private $servidor;
    private $usuario;
    private $clave;
    private $conexion;
    private $base_de_datos;
    public function __construct()
    {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->clave = "";
        $this->base_de_datos = "correo";
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->base_de_datos);
    } 
    
    public function consultar($sql) //llama la consulta sql
    {
        return $this->conexion->query($sql)->fetch_all();
    }
    public function consultar_con($sql) // consulta el usuario 
    {
        return $this->conexion->query($sql)->fetch_row();
    }
    public function actualizar($sql)    //actualiza crea y elimina
    {
        return $this->conexion->query($sql);
    }
    public function cerrar_conexion()  //cerrar la sesion
    {
        $this->conexion->close();
    }

    public function consultarCod($sql) //llama la consulta sql
    {
        return $this->conexion->query($sql)->fetch_array();

    }

}