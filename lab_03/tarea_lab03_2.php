<?php

class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function cargar1($valor1)
  {
    $this->valor1=$valor1;
  }
  public function cargar2($valor2)
  {
    $this->valor2=$valor2;
  }
  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2; 
  }
}

class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2;
  }
}

$suma=new Suma();
$suma->cargar1(31);
$suma->cargar2(15);
$suma->operar();
echo 'El resultado de la suma es:';
$suma->imprimirResultado();

$resta=new Resta();
$resta->cargar1(50);
$resta->cargar2(3);
$resta->operar();
echo 'El resultado de la diferencia es:';
$resta->imprimirResultado();

?>