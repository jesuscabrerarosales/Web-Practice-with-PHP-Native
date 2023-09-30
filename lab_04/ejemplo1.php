<?php
class Cadena {
	public static function largo($cad){
		return strlen($cad);
	}
	public static function mayusculas($cad){
		return strtoupper($cad);
	}
	public static function minusculas($cad){
		return strtolower($cad);
	}
}
$c='Hola';
echo 'Cadena orginal: '.$c;
echo '<br>';
echo 'Largo: '.Cadena::largo($c);
echo '<br>';
echo 'Todas mayusculas: '.Cadena::mayusculas($c);
echo '<br>';
echo 'Todas minusculas: '.Cadena::minusculas($c);
echo '<br>';
?>