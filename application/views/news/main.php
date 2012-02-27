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
//Nota inicial: Este comentario solo va en este archivo ...Vëase explicación al final de esta sección de código
//Esta sección tiene una especie de "hack fix" por así decirlo...
//Primeramente se crea un nuevo arreglo para las fechas($date) y un contador ($i)
$date = array(); $i = 0;
//Por cada parte de la información del arreglo $date_news, obtenemos su información por separado
foreach($date_news as $item_date_news)
{
	//En el arreglo, incrementando la posición del mismo, vamos guardando los valores en el formato:
	//Mes/Año - Ejemplo: Marzo/2012 -> Y así puede ser usada como parte de la URL sin necesidad de unir posteriormente la información
	$date[$i] = $item_date_news['month']."/".$item_date_news['year'];
	//Y vamos incrementando el contador de 1 en 1
	$i++;
}
//Para eliminar fechas repetidas, usamos la función array_unique, que saca las repetidas, por ejemplo:
//array([0] => "Marzo/2012", [1] => "Marzo/2012"); - Como veremos, está repetida, por lo que con esta función solo quedaría el arreglo:
//array([0] => "Marzo/2012"); - El segundo valor fue eliminado, en base a la parte superior, se tomaría la comparación para ir eliminando
$unique_date = array_unique($date);
//El arreglo en el que se fue almacenando la información única, se llama $unique_date (arriba) y con el, la cantidad de valores que hay, se toma como límite del arreglo
//Recordemos que los arreglos inician desde 0 (es decir, el 0 también cuenta)
for($i = 0; $i < count($unique_date); $i++) //Y aquí también iniciamos otro contador...
{
	//Para imprimir la flecha "explotamos" el arreglo basándonos en la "/", Ejemplo:
	//"Marzo/2012" -> Lo pasa a: array([0] => "Marzo", [1] => "2012");
	//Así que en la posición 0 tendría el valor numérico del mes y en la posición 1 tendría el del año...
	//De la siguiente forma: $print_date[0] = 01 <--Mes(Enero en este caso) | $print_date[1] = 2012 <--Año(2012 en este caso)
	$print_date = explode("/", $unique_date[$i]);
	//Imprimimos toda la información obtenida
	echo "<a href=\"".$base_url."news/date/".$unique_date[$i]."\">\n".			//En esta sección convertimos los digitos del mes a texto con la función date_digit_to_text($digit);
			"<span class=\"titlecontents\"><span class=\"arc_title arc_news\">".date_digit_to_text($print_date[0])." ".$print_date[1]."</span></span></a>\n";
																														//E imprimimos adicional el año
	//Explicación: Esta sección fue comentada ya que se quiere mostrar como estaría trabajando toda esta área del código ya que se buscará un mejor método
	//en caso de que exista, ya que no es el más óptimo que siento que podría haber...
	//Sin embargo, si no se encuentra otro método, se eliminarán estas líneas de código y se dejará tal y como está.
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