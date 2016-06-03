<?php
echo insertar("tb_usuarios",[["12","documento"],["luz","nombre"],["2016-01-01","fec_nacimiento"]]);


function insertar($tabla,$campos)
{
	$resultado="";
	
	$a="";$b="";$c=",";
	for($i=0;$i<count($campos);$i++)
	{
		if($i >=count($campos)-1) $c="";
		$a.="'".$campos[$i][0]."'".$c;
		$b.=$campos[$i][1].$c;

	}	
	//$c=trim($a,',');
	//$d=trim($b,',');
	$resultado.="insert into ".$tabla." (".$b.") values (".$a.")";
	
	
	return $resultado;
}

?>