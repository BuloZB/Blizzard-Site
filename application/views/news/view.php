<body class="news_archive">
	<div class="subheader">
		<div class="news">
				<div class="navsub">
	<form name="gs" method="get" onSubmit="return goSearch()">
	<div class="navigation">
		<div class="bg"></div>
		<div class="bar">
			<a href="#" class="navgames"></a>
			<a href="#" class="navcompany"></a>
			<a href="#" class="navcommunity"></a>
			<a href="#" class="navsupport"></a>
			<a href="#" class="navstore"></a>
		</div>
		<div class="searchbox">
			<input type="text" name="q" id="q" class="box" value="Buscar en Blizzard.com" onfocus="clearDefault(this)" onblur="setDefault(this)"/>
		</div>
		<div class="searchbutton">
			<input type="image" value="" class="button" src="<?php echo $images_path; ?>layout/pixel.gif"/>
		</div>
		<a href="#" class="blizzlink"></a>
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
<a class="selected" href="<?php echo $base_url; ?>/news"><span class="titlecontents"><span class="arc_title arc_news">
                                        Noticias actuales
								</span></span></a>
<?php
foreach($date_news as $item_date_news)
{
 echo "<a href=\"".$base_url."news/date/".$item_date_news['month']."/".$item_date_news['year']."\">\n
		<span class=\"titlecontents\"><span class=\"arc_title arc_news\">".date_digit_to_text($item_date_news['month'])." ".$item_date_news['year']."</span></span></a>\n";
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
                </div>
            </div>
		</div>            
	<div class="clear"><!-- --></div>
            </div>
        </div>
	</div>