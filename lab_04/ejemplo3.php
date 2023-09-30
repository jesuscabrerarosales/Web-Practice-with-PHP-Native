<?php
class Persona {
	private $nombre;
	private $edad;
	}
	$persona1=new Persona();
	$persona2=new Persona();
class Comparacion{
	public static function compareobjects($obj1,$obj2){
		$resultado=false;
		$refObj1=new ReflectionClass($obj1);
		$refObj2=new ReflectionClass($obj2);
		if($refObj1->getName()==$refObj2->getName()){
			$aProp1=$refObj1->getProperties();
			$aProp2=$refObj2->getProperties();
				for ($k=0; $k <sizeof($aProp2) ; $k++) { 
					if($aProp1[$k]->isPrivate()){
						$aProp1[$k]->setAccessible(true);
						$aProp2[$k]->setAccessible(true);
					}
					if($aProp1[$k]->getValue($obj1)==$aProp2[$k]->getValue($obj2))
						$resultado=true;
					else
					{
						$resultado=false;
						break 1;
					}
				}
		}
		else
			$resultado=false;
		return $resultado;
	}
}
echo Comparacion::compareobjects($persona1,$persona2);
?>