<?php
class soporte{
	public $titulo;
	protected $numero;
	private $precio;

	function __construct($titulo,$numero,$precio){
		$this->titulo=$titulo;
		$this->numero=$numero;
		$this->precio=$precio;
	}
	public function dame_precio_sin_iva(){
		return $this->precio;
	}
	public function dame_precio_con_iva(){
		return $this->precio*1.16;
	}
	public function dame_numero_identificacion(){
		return $this->numero;
	}
	public function imprime_caracteristicas(){
		echo $this->titulo;
		echo "<br>". $this->precio . "(IVA no incluido)";
	}

}
	$soporte1= new soporte("Los Nuevos", 22, 3);
	echo "<br>". $soporte1->titulo."<br>";
	echo "<br>Precio: ". $soporte1->dame_precio_sin_iva()." euros";
	echo "<br>Precio con IVA: ". $soporte1->dame_precio_con_iva()." euros";

	class cinta_video extends soporte{
		private $duracion;
		function __construct($titulo,$numero,$precio,$duracion){
		parent::__construct($titulo,$numero,$precio);
		$this->duracion=$duracion;
	}
	public function imprime_caracteristicas(){
		echo "Peliculas en VHS:<br>";
		parent:: imprime_caracteristicas();
		echo "<br>Duracion: ". $this->duracion;
	}
	}
	$micinta= new cinta_video("<br>Los Otros", 22, 4.5,"115 minutos");
	echo "<br>". $micinta->titulo."<br>";
	echo "<br>Precio: ". $micinta->dame_precio_sin_iva()." euros";
	echo "<br>Precio con IVA: ". $micinta->dame_precio_con_iva()." euros";
?>