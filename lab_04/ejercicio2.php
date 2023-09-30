<?php
class Calculadora {
	private $n1;
	private $n2;
	public function datosEntrada($n1,$n2){
		$this->n1=$n1;
		$this->n2=$n2;
	}
	public  function sumar(){
		return $this->n1+$this->n2;
	}
	public  function restar(){
		return $this->n1-$this->n2;
	}
	public  function multiplicar(){
		return $this->n1*$this->n2;
	}
	public  function dividir(){
		return $this->n1/$this->n2;
	}
}

$cal=new Calculadora();
$cal->datosEntrada(12,3);

echo 'Resultado sumar: '.$cal->sumar().'<br>';
echo 'Resultado restar: '.$cal->restar().'<br>';
echo 'Resultado multiplicar: '.$cal->multiplicar().'<br>';
echo 'Resultado dividir: '.$cal->dividir().'<br>';

?>