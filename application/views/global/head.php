<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $site_title; ?></title>
	<link rel="stylesheet" href="<?php echo $css_path; ?>master.css" />
	<link rel="stylesheet" href="<?php echo $css_path; ?>es/local.css" />
	<script type="text/javascript" src="<?php echo $js_path; ?>jquery.js"></script>
	<script type="text/javascript" src="<?php echo $js_path; ?>jquery.countdown.pack.js"></script>
	<script type="text/javascript" src="<?php echo $js_path; ?>swfobject.js"></script>
	<script type="text/javascript" src="<?php echo $js_path; ?>functions.js"></script>
	<script type="text/javascript" src="<?php echo $js_path; ?>screenViewer.js"></script>
	
	<script type="text/javascript">
			ctx = "http://us.media.blizzard.com/blizzard/"; 
			//ctx = "/_flash/"
			lang = locale = "es_mx";
			loc = "es-mx"
			root = "/";
			defsearch = "Buscar en Blizzard.com"
			msgInputText = "Ingresar texto";
			akamaiUrl = "http://us.media.blizzard.com/blizzard/";
			akamaiBaseUrl = "http://us.media.blizzard.com/";
			//DO NOT REMOVE
			var $j = jQuery.noConflict();
			if(Browser.ie7) { addStylesheet('<?php echo $css_path; ?>ie7.css'); }else if(Browser.ie6) { addStylesheet('<?php echo $css_path; ?>ie6.css');			
			addStylesheet('<?php echo $css_path; ?>es/local_ie6.css'); }else if(Browser.opera) { addStylesheet('<?php echo $css_path; ?>opera.css'); }else if(Browser.safari) { addStylesheet('<?php echo $css_path; ?>safari.css'); }
		</script>
</head>