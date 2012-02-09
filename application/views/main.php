<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $site_title; ?></title>
	<link rel="stylesheet" href="<?php echo $css_path; ?>master.css" />
	<link rel="stylesheet" href="<?php echo $css_path; ?>es/local.css" />
	<script type="text/javascript" src="<?php echo $js_path; ?>swfobject.js"></script>
	<script type="text/javascript" src="<?php echo $js_path; ?>functions.js"></script>
</head>
<body class="frontpage">
	<script type="text/javascript" src="<?php echo $js_path; ?>slider.js"></script>  
	<script type="text/javascript">
		/*
		*	Esta sección controla lo que sería el SLIDER en Flash superior...No accesible aún
		*/
		var flashvars = {
			importxmlpath : "<?php echo $content_path; ?>es/frontpage.xml", //En esta ruta "es" deberá ser obtenida por la cookie del idioma almacenado.
			mediahostpath : "<?php echo $flash_path; ?>"
		};
		var params = {
			bgcolor : "#010d16",
			quality : "autohigh",		
			wmode : "transparent",
			base : "<?php echo $content_path; ?>",
			allowScriptAccess : "always"
		};
		swfobject.embedSWF("<?php echo $flash_path; ?>header.swf", "flashHeader", "100%", "570", "9.0.0", false, flashvars, params, {});
	</script>
	<div class="frontpagearea">
		<div class="frontpagecenter">
			<div class="frontpageheader" >
				<div id="flashHeader"> 
					<div id="flashBannerFallback" style="display:none">
						<div class="static-banners">
								<div id="bannerDiv0" class="static-banner" style="background-image:url(http://us.media.blizzard.com/blizzard/_images/frontpage/es-mx/banner-mists.jpg)">
									<div class="inner-banner"><a href="http://us.blizzard.com/es-mx/games/videos/index.html?v=mists:reveal" style="right:177px; width:142px"></a><a href="http://us.battle.net/wow/es/game/mists-of-pandaria/" style="right:29px"></a></div>
						</div>
								<div id="bannerDiv1" class="static-banner" style="background-image:url(http://us.media.blizzard.com/blizzard/_images/frontpage/es-mx/banner-blizzcon.jpg);display:none">
									<div class="inner-banner"><a href="http://us.blizzard.com/blizzcon/es/" style="right:110px"></a></div>
						</div>
								<div id="bannerDiv2" class="static-banner" style="background-image:url(http://us.media.blizzard.com/blizzard/_images/frontpage/es-mx/banner-cataclysm.jpg);display:none">
									<div class="inner-banner"><a href="http://us.blizzard.com/es-mx/games/videos/index.html?v=cataclysm:cinematic" style="right:172px; width:142px"></a><a href="http://us.blizzard.com/es-mx/games/cataclysm/index.html" style="right:24px"></a></div>
						</div>
								<div id="bannerDiv3" class="static-banner" style="background-image:url(http://us.media.blizzard.com/blizzard/_images/frontpage/es-mx/banner-sc2.jpg);display:none">
									<div class="inner-banner"><a href="http://us.blizzard.com/es-mx/games/videos/index.html?v=sc2:teaser" style="right:172px; width:142px"></a><a href="http://us.blizzard.com/es-mx/games/sc2/index.html" style="right:24px"></a></div>
						</div>
								<div id="bannerDiv4" class="static-banner" style="background-image:url(http://us.media.blizzard.com/blizzard/_images/frontpage/es-mx/banner-d3.jpg);display:none">
									<div class="inner-banner"><a href="http://us.blizzard.com/es-mx/games/videos/index.html?v=d3:teaser" style="right:172px; width:142px"></a><a href="http://us.blizzard.com/diablo3/?rhtml=y" style="right:32px"></a></div>
						</div>
							<a href="javascript:;" onclick="pageBanners('next')" class="static-banner-arrow arrow-right"></a>
							<a href="javascript:;" onclick="pageBanners('prev')" class="static-banner-arrow arrow-left"></a>
					</div>                    
						<div class="static-banner-buttons">
							<div class="static-banner-buttons-wrapper">
								<div id="button-row" style="width:580px; margin-left:0px">
										<a id="bannerButton0" class="static-banner-button active-banner-button"
											href="javascript:;" onclick="activateBanner(0)">
											<span style="background-image:url(http://us.media.blizzard.com/blizzard/_flash/frontpage/common/logo-mists.png)"></span>
										</a>
										<a id="bannerButton1" class="static-banner-button "
											href="javascript:;" onclick="activateBanner(1)">
											<span style="background-image:url(http://us.media.blizzard.com/blizzard/_flash/frontpage/common/logo-blizzcon.png)"></span>
										</a>
										<a id="bannerButton2" class="static-banner-button "
											href="javascript:;" onclick="activateBanner(2)">
											<span style="background-image:url(http://us.media.blizzard.com/blizzard/_flash/frontpage/common/logo-cataclysm.png)"></span>
										</a>
										<a id="bannerButton3" class="static-banner-button "
											href="javascript:;" onclick="activateBanner(3)">
											<span style="background-image:url(http://us.media.blizzard.com/blizzard/_flash/frontpage/common/logo-sc2.png)"></span>
										</a>
										<a id="bannerButton4" class="static-banner-button "
											href="javascript:;" onclick="activateBanner(4)">
											<span style="background-image:url(http://us.media.blizzard.com/blizzard/_flash/frontpage/common/logo-d3.png)"></span>
										</a>
				</div>
			</div>
							<div class="static-button-frame left-frame"></div>
							<div class="static-button-frame right-frame"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="navigation-holder-frontpage">
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
			<div class="centercontainer">
				<div class="newscontainer">
					<div class="newsheader">
						<div class="latestnews"></div>
                        <div class="facebookicon"><a href="#" title="Blizzard en Facebook"></a></div>
						<div class="rssicon"><a href="#" title="Noticias en RSS"></a></div>
                        <div class="viewallnews"><a href="#">Ver todas las noticias</a></div>
                    </div>
					<div id="newsbox">
						<dl class="sliderbox" id="slider2">                   
        <dt><span class="date">null</span><span class="title">null</span></dt>
        <dd>
            	<div class="thumb"><a  href="#"><img src="http://us.media2.battle.net/cms/blog_thumbnail/257619BPANMW1328574444716.jpg"/></a></div>
            <div class="text">
			null
            <div>
            <a class="readmoreline" href="#">
            	<span class="arrow"></span>leer m&aacute;s
            </a>
            </div>
            </div>
        </dd>
        <dt><span class="date">null</span><span class="title">null</span></dt>
        <dd>
            	<div class="thumb"><a  href="#" ><img src="http://us.media1.battle.net/cms/blog_thumbnail/5REYLSZP9MJT1327507020394.jpg"/></a></div>
            <div class="text">
            null
            <div>
            <a class="readmoreline" href="#">
            	<span class="arrow"></span>leer m&aacute;s
            </a>
            </div>
            </div>
        </dd>
        <dt><span class="date">null</span><span class="title">null</span></dt>
        <dd>
            	<div class="thumb"><a  href="#"><img src="http://us.media4.battle.net/cms/blog_thumbnail/QM1ETPOSU7CF1321996122363.jpg"/></a></div>
            <div class="text">
            null
            <div>
            <a class="readmoreline" href="#">
            	<span class="arrow"></span>leer m&aacute;s
            </a>
            </div>
            </div>
        </dd>
        <dt><span class="date">null</span><span class="title">null</span></dt>
        <dd>
            	<div class="thumb"><a  href="#"><img src="http://us.media1.battle.net/cms/blog_thumbnail/7GLU3GVF1ZGM1319216366055.jpg"/></a></div>
            <div class="text">
            <p><strong>null</strong>
            <div>
            <a class="readmoreline" href="#">
            	<span class="arrow"></span>leer m&aacute;s
            </a>
            </div>
            </div>
        </dd>
						</dl>
					</div> 
				</div> 
      <a href="#" class="spotlight1" style="background-image: url(/images/frontpage/es-mx/spotlight-sc2starter.jpg);"></a>
      <a href="#" class="spotlight2" style="background-image: url(/_images/frontpage/es-mx/spotlight-wowtrial-alliance.jpg);"></a>
			</div>                 
		</div>       
	</div>
		
	<script type="text/javascript">
		var flashvars = {};
		var params = {};
		params.bgcolor = "#010d16";
		params.quality = "autohigh";
		params.wmode = "transparent";
		params.base = "/_flash/";
		params.allowScriptAccess = "always";
		flashvars.importxmlpath = "<?php echo $content_path; ?>es/frontpage.xml";
		flashvars.mediahostpath = "http://us.media.blizzard.com/blizzard/_flash/";
		var attributes = {};
		swfobject.embedSWF("http://us.media.blizzard.com/blizzard/_flash/header.swf", "flashHeader", "100%", "570", "9.0.0", false, flashvars, params, attributes, bannerEmbedCallback);
        var slider2=new accordion.slider("slider2");
        slider2.init("slider2",0,"open");
		var bannerList = [];
		var bannerButtonList = [];
		var buttonRow = document.getElementById('button-row');
		var buttonSliderTimeout = 0;
		var bannerSliderTimeout = 0;
		var activeIndex = 0;
			bannerList[0] = document.getElementById('bannerDiv0');
			bannerButtonList[0] = document.getElementById('bannerButton0');
			bannerList[1] = document.getElementById('bannerDiv1');
			bannerButtonList[1] = document.getElementById('bannerButton1');
			bannerList[2] = document.getElementById('bannerDiv2');
			bannerButtonList[2] = document.getElementById('bannerButton2');
			bannerList[3] = document.getElementById('bannerDiv3');
			bannerButtonList[3] = document.getElementById('bannerButton3');
			bannerList[4] = document.getElementById('bannerDiv4');
			bannerButtonList[4] = document.getElementById('bannerButton4');
			
		function activateBanner(elementIndex) {
			clearTimeout(bannerSliderTimeout)
			bannerSliderTimeout = setTimeout(function() {
				pageBanners("next")
			}, 5000)

			if (elementIndex == activeIndex) {
				return;
			}

			for (var x = 0; x < bannerButtonList.length; x++) {
				if (bannerList[x].style.display != "none") {
					$j(bannerList[x]).fadeOut();
				}
				bannerButtonList[x].className = "static-banner-button";
			}

			bannerButtonList[elementIndex].className = "static-banner-button active-banner-button";

			$j(bannerList[elementIndex]).fadeIn();

			var currentMargin = buttonRow.style.marginLeft;
			currentMargin = currentMargin.substring(0, currentMargin.indexOf("px"))

			if (elementIndex >= 3) {
				buttonRow.style.marginLeft = "-116px";
				//slideButtonRow(currentMargin * 1, -4, -116)
			} else if (elementIndex <= 1) {
				buttonRow.style.marginLeft = "0";
				//slideButtonRow(currentMargin * 1, 4, 0)
			}

			activeIndex = elementIndex;
		}

		function slideButtonRow(currentMargin, slideAmount, targetMargin) {
			clearTimeout(buttonSliderTimeout)

			var newMargin = (currentMargin + slideAmount);

			if ((slideAmount > 0 && newMargin <= targetMargin) || (slideAmount < 0 && newMargin >= targetMargin)) {

				buttonRow.style.marginLeft = newMargin + "px";

				buttonSliderTimeout = setTimeout(function() {
										slideButtonRow(newMargin, slideAmount, targetMargin)
									}, 1)
			}
		}

		function pageBanners(direction) {
			var newIndex = 0;

			if (direction == "next") {
				if ((activeIndex + 1) >= bannerList.length) {
					newIndex = 0;
				} else {
					newIndex = activeIndex + 1;
				}
			} else if (direction == "prev") {
				if ((activeIndex - 1) < 0) {
					newIndex = bannerList.length - 1;
				} else {
					newIndex = activeIndex - 1;
				}
			}

			activateBanner(newIndex);
		}
		function bannerEmbedCallback(e) {
			if (!e.success) {
				var flashBannerFallback = document.getElementById("flashBannerFallback");
				flashBannerFallback.style.display = "";
				bannerSliderTimeout = setTimeout(function() {
											pageBanners("next")
										}, 5000)
			}
		}
	</script>