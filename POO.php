<?php

class Producto{

    public string $nombre;
    public int $precio;
    public bool $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible)
    {

        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
        
    }


    public function mostrarProducto(){
        echo " El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }


}



$producto = new Producto('Computadora', 500, true);

$producto->mostrarProducto();


echo "<prev>";
var_dump($producto);
echo "</prev>";



$producto = new Producto('Televisor', 700, true);

$producto->mostrarProducto();


echo "<prev>";
var_dump($producto);
echo "</prev>";

?>
