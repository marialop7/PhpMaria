<?php 

class tiendas { 
 //login=tiendas clave=atributos (ropa, juguetes, comida...)
  // Atributos
  
  public $comida;
  public $ropa;
  public $juguetes;
  
  // Métodos {}
  
  function tiendas($comida, $ropa, $juguetes){
	  
	  if($clave==$this->clave){
		  echo "clave correcta";
	  }else{
		  echo "clave incorrecta";
	  }
  }
  
  public function __construct($clave) {
	  $this->clave=$clave;
	  echo "Empiezo a vivir\n";
  } 
  
  public function __destruct() {
		echo "Hasta siempre\n";
  } 
  
}


echo "Aquí empieza el programa\n";

$j=new Usuario("y0soiC4n1");
$j->nombre="Juan";

echo "Me llamo " . $j->nombre . "\n";

$j->login("y0soi*****");

?>
