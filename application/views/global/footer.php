<?php
	if($landing_footer == true)
	{
		echo "<div class=\"landing-footer\">
				<div class=\"footer\">";
	}else{
		echo "<div class=\"footercontainer\">
				<div class=\"footer\">";
	}
?>
		<a href="#" class="logo-blizzard"></a>
		<a href="#" class="logo-battlenet" target="_blank"></a>
		<div class="footercontents">
			<div class="footercontents_int">
				<div class="links">

				<a href="#">Prensa</a>
				<span class="spacer">|</span>
				<a href="#">Oportunidades de empleo</a>
				<span class="spacer">|</span>
				<a href="#" class="privacy">Pol&iacute;tica de Privacidad</a>
				<span class="spacer">|</span>
				<a href="#">Legal</a>
				<span class="spacer">|</span>
				<a href="#">Cont&aacute;ctanos</a>
                <span class="spacer">|</span>
                <a href="#">Mapa del sitio</a>
				</div>
				<br />
				<br/>
				<p class="dark">
					Todas las marcas aqu&iacute; mencionadas son propiedad de sus respectivos due&ntilde;os. <br />&copy;2012 Blizzard Entertainment. Todos los derechos reservados.
				</p>
				<br />
				<br/>
				<span class="languagetitle">Idioma:   </span>
				<div class="lang-select links" onMouseOver="this.mfocus=true" onMouseOut="this.mfocus=false">
                        <a class="language" href="javascript:;" onclick="$j('#locdrop').toggle();" onblur="btoggle('locdrop',this)">
                        	<span class="languageitem">Espa&ntilde;ol</span>
                            <span class="langarrow"></span>
                        </a>
                        <div class="langbox" id="locdrop">
                            <div class="top"></div>
                            <div class="middle">
                                <div class="left"></div>
                                <div class="right"></div>
                                <div class="content">
                                    <div class="regions">
                                          <div class="regionus"><div class="regiontitle">Am&eacute;rica y Ocean&iacute;a</div>
                                           <div class="languages">
                                              <a href="#">English</a><br />
                                              <a href="#">Espa&ntilde;ol</a><br />
                                          </div>
                                          </div>
                                          <div class="regioneu"><div class="regiontitle">Europa</div>
                                           <div class="languages">
                                              <a href="#">English</a><br />
                                              <a href="#">Espa&ntilde;ol</a><br />
                                          </div>
                                          </div>
                                          <div class="regioncn"><div class="regiontitle">Asia</div>
                                           <div class="languages">
                                              <a href="#">English</a><br />
                                          </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="left"></div>
                                <div class="lang">
			                        <a class="currentlanguage" href="javascript:;" onclick="$j('#locdrop').toggle();" onblur="btoggle('locdrop',this)">
                                    	<span class="languageitem">Espa&ntilde;ol</span>
			                            <span class="langarrow"></span>
                                 	</a>
                                </div>
                                <div class="middle"></div>
                                <div class="right"></div>
                                <div class="stretch"></div>
                            </div>
                        </div>
                    </div>

			</div>
		</div>
            <div class="ratings">
                <a href="#" class="esrb-footer" target="_blank"></a>
                <div class="clear"></div>
            </div>
	</div>
   </div>

   	</body>
</html>