<?php echo $rss_start; ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title><?php echo $site_title; ?>-Noticias</title>
		<link><?php echo $base_url; ?></link>
		<atom:link href="<?php echo $base_url; ?>rss" rel="self" type="application/rss+xml" />
		<description>Lo más reciente en <?php echo $site_title; ?></description>
		 <lastBuildDate>20 feb 2012 11:00:00 PDT</lastBuildDate>
		<language>es</language>
		<copyright><?php echo $site_title; ?> </copyright>
		
		<image>
			<url><?php echo $images_path; ?>layout/logo-blizzard.gif</url>
			<title><?php echo $site_title;?>-Noticias </title>
			<link><?php echo $base_url; ?></link>
		</image>

<?php
	//En esta sección el "isPermaLink" se refiere (según entiendo) a si el link se quedará "pegado" siempre...En el RSS pero como no, lo marco como falso [no administrable]
	foreach($news as $news_item)
	{
		echo "\t\t\t<item>
				<title>".$news_item['title']."</title>
				<link>".$base_url."news/view/".$news_item['id']."</link>
				<description>
					".$news_item['text']."
				</description>
				<author>".$news_item['author']."</author>
				<guid isPermaLink=\"false\">".$base_url."news/view/".$news_item['id']."</guid>
				<pubDate>".$news_item['day']." ".$news_item['month']." ".$news_item['year']." 11:00:00 PDT</pubDate>
			</item>\n";
	
	}
?>

	</channel>
</rss>
