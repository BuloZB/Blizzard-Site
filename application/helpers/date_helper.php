<?php
if(!DEFINED('BASEPATH'))
	exit('<h1>Error 403</h1><p>Acceso restringido</p>');
	//To Do: Arreglar las fechas para la posibilidad de multi-lenguajes
	function date_digit_to_text($digit)
	{
		if($digit == "01") return 'Enero';
		elseif($digit == "02") return 'Febrero';
		elseif($digit == "03") return 'Marzo';
		elseif($digit == "04") return 'Abril';
		elseif($digit == "05") return 'Mayo';
		elseif($digit == "06") return 'Junio';
		elseif($digit == "07") return 'Julio';
		elseif($digit == "08") return 'Agosto';
		elseif($digit == "09") return 'Septiembre';
		elseif($digit == "10") return 'Octubre';
		elseif($digit == "11") return 'Noviembre';
		elseif($digit == "12") return 'Diciembre';
		else return '';
	}
?>