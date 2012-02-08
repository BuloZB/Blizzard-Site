<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $site_title; ?></title>
	<link rel="stylesheet" href="<?php echo $css_path; ?>master.css" />
	<link rel="stylesheet" href="<?php echo $css_path; ?>es/local.css" />
	<script type="text/javascript" src="<?php echo $js_path; ?>"></script>
</head>
<body class="frontpage">
	<script type="text/javascript" src="<?php echo $js_path; ?>slider.js"></script>  
	<script type="text/javascript">
		/*
		*	Esta sección controla lo que sería el SLIDER en Flash superior...No accesible aún
		*/
		var flashvars = {
			importxmlpath : "/content/es-mx/frontpage.xml",
			mediahostpath : "<?php echo $flash_path; ?>"
		};
		var params = {
			bgcolor : "#010d16",
			quality : "autohigh",		
			wmode : "transparent",
			base : "/flash/",
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
</body>
</html>