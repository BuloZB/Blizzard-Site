<body class="news_archive">
	<div class="subheader">
		<div class="news">
				<div class="navsub">
	<form name="gs" method="get" onSubmit="return goSearch()">
	<div class="navigation">
		<div class="bg"></div>
		<div class="bar">
			<a href="<?php echo $base_url; ?>games/" class="navgames"></a>
			<a href="<?php echo $base_url; ?>company/" class="navcompany"></a>
			<a href="<?php echo $base_url; ?>community/" class="navcommunity"></a>
			<a href="<?php echo $base_url; ?>support/" class="navsupport"></a>
			<a href="<?php echo $base_url; ?>store/" class="navstore"></a>
		</div>
		<div class="searchbox">
			<input type="text" name="q" id="q" class="box" value="Buscar en Blizzard.com" onfocus="clearDefault(this)" onblur="setDefault(this)"/>
		</div>
		<div class="searchbutton">
			<input type="image" value="" class="button" src="<?php echo $images_path; ?>layout/pixel.gif"/>
		</div>
		<a href="<?php echo $base_url; ?>" class="blizzlink"></a>
	</div>
	</form>
				</div>
		</div>
	</div>
	<div class="subcontents">
		<div class="middle bg-subpage">
            <div class="wrapper">
	<div class="breadcrumb breadcrumbsub">
		<div class="left"></div>
		<div class="center">
			<div class="ref">
				<div class="contents">
					<div class="link"><a href="<?php echo $base_url; ?>">Principal</a></div>
					<div class="arrowsm"></div>
						<div class="text">Archivo de noticias</div>
				</div>
			</div>
		</div>
		<div class="right"></div>
	</div>
		<div class="contents">        
            <div class="flashTextHeightPlaceholder">
            		<div id="flashtextcontainer0" class="flashtextcontainer" >
		<div id="flashtext0"><h1 class="landingtitle">Archivo de noticias</h1>
		<script type="text/javascript">
            var flashvars = { xmlpath:"<?php echo $content_path; ?>es/flashtext.xml", classname:"landingtitle", divid:"flashtextcontainer0", text:"Archivo%20de%20noticias" };
            var params = { menu:"false", wmode:"transparent", base:".", allowScriptAccess:"true" };
            swfobject.embedSWF("<?php echo $flash_path; ?>flashtext.swf", "flashtext0", "100%", "100%", "9.0.0", false, flashvars, params);
        </script></div>
	</div>
            </div>
            <div class="newsarchive">
                <div class="archive_nav">
<a class="selected" href="<?php echo $base_url; ?>news"><span class="titlecontents"><span class="arc_title arc_news">
                                        Noticias actuales
								</span></span></a>
<?php
//Nota inicial: Este comentario solo va en este archivo ...V�ase explicaci�n al final de esta secci�n de c�digo
//Esta secci�n tiene una especie de "hack fix" por as� decirlo...
//Primeramente se crea un nuevo arreglo para las fechas($date) y un contador ($i)
$date = array(); $i = 0;
//Por cada parte de la informaci�n del arreglo $date_news, obtenemos su informaci�n por separado
foreach($date_news as $item_date_news)
{
	//En el arreglo, incrementando la posici�n del mismo, vamos guardando los valores en el formato:
	//Mes/A�o - Ejemplo: Marzo/2012 -> Y as� puede ser usada como parte de la URL sin necesidad de unir posteriormente la informaci�n
	$date[$i] = $item_date_news['month']."/".$item_date_news['year'];
	//Y vamos incrementando el contador de 1 en 1
	$i++;
}
//Para eliminar fechas repetidas, usamos la funci�n array_unique, que saca las repetidas, por ejemplo:
//array([0] => "Marzo/2012", [1] => "Marzo/2012"); - Como veremos, est� repetida, por lo que con esta funci�n solo quedar�a el arreglo:
//array([0] => "Marzo/2012"); - El segundo valor fue eliminado, en base a la parte superior, se tomar�a la comparaci�n para ir eliminando
$unique_date = array_unique($date);
//El arreglo en el que se fue almacenando la informaci�n �nica, se llama $unique_date (arriba) y con el, la cantidad de valores que hay, se toma como l�mite del arreglo
//Recordemos que los arreglos inician desde 0 (es decir, el 0 tambi�n cuenta)
for($i = 0; $i < count($unique_date); $i++) //Y aqu� tambi�n iniciamos otro contador...
{
	//Para imprimir la flecha "explotamos" el arreglo bas�ndonos en la "/", Ejemplo:
	//"Marzo/2012" -> Lo pasa a: array([0] => "Marzo", [1] => "2012");
	//As� que en la posici�n 0 tendr�a el valor num�rico del mes y en la posici�n 1 tendr�a el del a�o...
	//De la siguiente forma: $print_date[0] = 01 <--Mes(Enero en este caso) | $print_date[1] = 2012 <--A�o(2012 en este caso)
	$print_date = explode("/", $unique_date[$i]);
	//Imprimimos toda la informaci�n obtenida
	echo "<a href=\"".$base_url."news/date/".$unique_date[$i]."\">\n".			//En esta secci�n convertimos los digitos del mes a texto con la funci�n date_digit_to_text($digit);
			"<span class=\"titlecontents\"><span class=\"arc_title arc_news\">".date_digit_to_text($print_date[0])." ".$print_date[1]."</span></span></a>\n";
																														//E imprimimos adicional el a�o
	//Explicaci�n: Esta secci�n fue comentada ya que se quiere mostrar como estar�a trabajando toda esta �rea del c�digo ya que se buscar� un mejor m�todo
	//en caso de que exista, ya que no es el m�s �ptimo que siento que podr�a haber...
	//Sin embargo, si no se encuentra otro m�todo, se eliminar�n estas l�neas de c�digo y se dejar� tal y como est�.
}
?>
                </div>
                <div class="archivenews">
                	<div class="currentnewsmonth">
	                		<div id="flashtextcontainer1" class="flashtextcontainer" >
		<div id="flashtext1"><h1 class="archivetitle"> Noticias actuales</h1>
		<script type="text/javascript">
            var flashvars = { xmlpath:"<?php echo $content_path; ?>es/flashtext.xml", classname:"archivetitle", divid:"flashtextcontainer1", text:"%20Noticias%20actuales" };
            var params = { menu:"false", wmode:"transparent", base:".", allowScriptAccess:"true" };
            swfobject.embedSWF("<?php echo $flash_path; ?>flashtext.swf", "flashtext1", "100%", "100%", "9.0.0", false, flashvars, params);
        </script></div>
	</div>
                    </div>
		<div class="paging">
			<div class="pages">
				<div class="numbers">
					<div>
					<?php
						for($i = 0; $i < $total_news; $i++)
						{
							if($i == 0)
								echo "<a class=\"selected\" href=\"".$base_url."news/page/1\">".($i + 1)."</a>";
							else
								echo "<a href=\"".$base_url."news/page/1\">".($i + 1)."</a>";
						}
					?>
					</div>
				</div>
			</div>
		</div>
                    <dl>
<?php
foreach($news as $item_news)
{
	echo "<a id=\"".$item_news['id']."\"></a>\n
			<dt class=\"open\"><span class=\"date\">".$item_news['day']."/".$item_news['month']."/".$item_news['year']."</span>\n
			<span class=\"title\">".$item_news['title']."</span></dt>\n
			<dd>\n
				<div class=\"thumb\"><a href=\"#\" onclick=\"window.open(this.href); return false\"><img src=\"".$item_news['image']."\" /></a></div>\n
				<div class=\"text\">\n
				<p>".$item_news['text']."</p>\n
				</div>
			</dd>
				<dd class=\"footer\"></dd>";
}
?>                                                                          
                    </dl>
					
		<div class="paging">
			<div class="pages">
				<div class="numbers">
					<div>
					<?php
						for($i = 0; $i < $total_news; $i++)
						{
							if($i == 0)
								echo "<a class=\"selected\" href=\"".$base_url."/news/page/1\">".($i + 1)."</a>";
							else
								echo "<a href=\"".$base_url."/news/page/1\">".($i + 1)."</a>";
						}
					?>
					</div>
				</div>
			</div>
		</div>
					
                </div>
            </div>
		</div>            
	<div class="clear"><!-- --></div>
            </div>
        </div>
	</div>