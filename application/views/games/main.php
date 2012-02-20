<body class="games-landing">
	<div class="subheader">
		<div class="">
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
			<div class="landingcontents">
				<div class="holder">
		<div class="pagetitle">
			<div class="title">
					<div id="flashtextcontainer0" class="flashtextcontainer" >
		<div id="flashtext0"><h1 class="pagetitle">Juegos</h1>
		<script type="text/javascript">
            var flashvars = { xmlpath:"<?php echo $content_path; ?>es/flashtext.xml", classname:"pagetitle", divid:"flashtextcontainer0", text:"Juegos" };
            var params = { menu:"false", wmode:"transparent", base:".", allowScriptAccess:"true" };
            swfobject.embedSWF("<?php echo $flash_path; ?>flashtext.swf", "flashtext0", "100%", "100%", "9.0.0", false, flashvars, params);
        </script></div>
	</div>
			</div>
		</div>		
		<div class="games-landing">
<?php
	if($have_developing_games == true)
	{
?>
		<div class="underdev">
			<div class="standardbox">
				<div class="topbar">
					<div class="leftcorner"></div>
					<div class="rightcorner"></div>							
					<div class="middle">
						<div class="rightfade"></div>					
						<div class="title">
								<div id="flashtextcontainer1" class="flashtextcontainer" >
		<div id="flashtext1"><h1 class="boxtitle">En desarrollo</h1>
		<script type="text/javascript">
            var flashvars = { xmlpath:"<?php echo $content_path; ?>es/flashtext.xml", classname:"boxtitle", divid:"flashtextcontainer1", text:"En%20desarrollo" };
            var params = { menu:"false", wmode:"transparent", base:".", allowScriptAccess:"true" };
            swfobject.embedSWF("<?php echo $flash_path; ?>flashtext.swf", "flashtext1", "100%", "100%", "9.0.0", false, flashvars, params);
        </script></div>
	</div>
						</div>
					</div>					
				</div>
				<div class="middlebar">
                    <div class="backgroundthreelines">
                        <div class="line">
							<?php
								//En la línea 72 tuve que poner un "hack" ya que no se podrían agregar juegos al desarrollo...Que en esta ocasión serían reinos...
								$i = 1;
								foreach($get_developing_games as $games)
								{
									echo "<div class=\"box".$i."\">\n
											<a href=\"".$base_url."games/".$games['bs_config_value_tertiary']."\" target=\"_blank\"><img style=\"padding-top:15px; margin-bottom: -5px;\" src=\"".$images_path."lang/es/gamecard_games_".$games['bs_config_value'].".jpg\" /></a>\n
											<div class=\"description\">\n
												".$games['bs_config_value_secondary']."\n
											</div>\n
										</div>\n";
									$i++;
								}
							?>
                            <div class="clear"></div>
                        </div>
                    </div>
				</div>

				<div class="bottombar">
					<div class="middle">	
						<div class="leftcorner"></div>
						<div class="rightcorner"></div>	
					</div>				

				</div>	
				<div class="shadowbar">
					<div class="line"></div>				
					<div class="shadow"></div>
				</div>			
			</div>
		</div>
<?php
	}else
		echo "";
	if($have_active_games == true)
	{
?>
		<div class="allgames">
			<div class="standardbox">
				<div class="topbar">
					<div class="leftcorner"></div>
					<div class="rightcorner"></div>									
					<div class="middle">
						<div class="rightfade"></div>					
						<div class="title">
								<div id="flashtextcontainer3" class="flashtextcontainer" >
		<div id="flashtext3"><h1 class="boxtitle">Todos los demás juegos</h1>
		<script type="text/javascript">
            var flashvars = { xmlpath:"<?php echo $content_path; ?>es/flashtext.xml", classname:"boxtitle", divid:"flashtextcontainer3", text:"Todos%20los%20dem%C3%A1s%20juegos" };
            var params = { menu:"false", wmode:"transparent", base:".", allowScriptAccess:"true" };
            swfobject.embedSWF("<?php echo $flash_path; ?>flashtext.swf", "flashtext3", "100%", "100%", "9.0.0", false, flashvars, params);
        </script></div>
	</div>
							
						</div>
					</div>					
				</div>
				<div class="middlebar">
					<div class="backgroundthree">
						<?php
							$i = 1;
							foreach($get_active_games as $games)
							{
								if($i == 1)
									echo "<div class=\"line\">\n";
								if($i <= 3)
								{
									//Aquí aplica otro "hack" para cargar las imágenes en ves de las clases...
									echo "<div class=\"box".$i."\"><a href=\"".$base_url."games/".$games['bs_config_value_tertiary']."\"><img style=\"padding-top:15px;\" src=\"".$images_path."lang/es/gamecard_games_".$games['bs_config_value'].".jpg\" /></a></div>\n";
										$i++;
										if($i > 3)
										{
											echo "</div>\n";
											$i = 1;
										}
								}
								
							}
						?>		
					</div>				
				</div>
				<div class="bottombar">
					<div class="middle">
						<div class="leftcorner"></div>
						<div class="rightcorner"></div>
						<div class="backgroundthree"></div>										
					</div>				
				</div>
				<div class="shadowbar">
					<div class="line"></div>				
					<div class="shadow"></div>
				</div>				
			</div>
		</div>
<?php
	}else
		echo "";
?>
		<div style="height: 1px; width: 100%; clear: both; font-size: 0px;"></div>
		<div class="explore">
			<div class="standardbox">
				<div class="topbar">
					<div class="leftcorner"></div>
					<div class="rightcorner"></div>									
					<div class="middle">
						<div class="rightfade"></div>					
						<div class="title">
								<div id="flashtextcontainer4" class="flashtextcontainer" >
		<div id="flashtext4"><h1 class="boxtitle">Explora</h1>
		<script type="text/javascript">
            var flashvars = { xmlpath:"<?php echo $content_path; ?>es/flashtext.xml", classname:"boxtitle", divid:"flashtextcontainer4", text:"Explora" };
            var params = { menu:"false", wmode:"transparent", base:".", allowScriptAccess:"true" };
            swfobject.embedSWF("<?php echo $flash_path; ?>flashtext.swf", "flashtext4", "100%", "100%", "9.0.0", false, flashvars, params);
        </script></div>
	</div>
							
						</div>
					</div>					
				</div>
				<div class="middlebar">
					<div class="backgroundthree">
                        <div class="line">
	                        <div class="box1"><a href="music/" class="music"></a></div>
                            <div class="box2"><a href="videos/" class="trailers"></a></div>
                            <div class="box3"><a href="../company/careers/" class="careers"></a></div>
						</div>                      
					</div>
				</div>
				<div class="bottombar">
					<div class="middle">
						<div class="leftcorner"></div>
						<div class="rightcorner"></div>
						<div class="backgroundthree"></div>										
					</div>			
				</div>
				<div class="shadowbar">
					<div class="line"></div>				
					<div class="shadow"></div>
				</div>				
			</div>
		</div>	
		</div>
				</div>
			</div>
		</div>
	</div>