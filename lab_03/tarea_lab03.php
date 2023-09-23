

<?php
class CabeceraPagina {
	public $titulo;
	public $posicion;

	function __construct($titulo,$posicion){
		$this->titulo=$titulo;
		$this->posicion=$posicion;
	}

	public function escoger_posicion($titulo,$posicion){
		if($posicion=="centrada"){
			echo "<br> Se ha centrado";
		}elseif ($posicion=="derecha") {
			echo "<br> Se ha moviedo a la derecha";
		}elseif ($posicion=="izquierda") {
			echo "<br> Se ha moviedo a la izquierda";
		}
	}
}
$cabecera1=new CabeceraPagina("LAN","derecha");
$cabecera2=new CabeceraPagina("RON","centrada");
echo "<br>". $cabecera1->escoger_posicion("LAN","derecha")." fue la posicion escogida";
echo "<br>". $cabecera2->escoger_posicion("RON","centrada")." fue la posicion escogida";
?>