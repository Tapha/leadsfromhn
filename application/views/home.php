<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Here are your leads</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #333;
		background-color: #FF9;
		font-weight: normal;
		text-decoration: none;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Here are your leads!</h1>

	<div id="body">
		<p><?php
			 
			 $all1 = $this->hn_api->get_search_by_date('passive income&tags=story&hitsPerPage=500');
			 $all = $all1['hits'];
			 //print_r($this->hn_api->get_item($max));
			 echo "<br><br><br><br><br><br><br><br><br><br>";
			 
			 //print_r($all);
			 echo "<h1>Query: 'Passive Income'".$all1['nbHits']."</h1>";
			 foreach ($all as $a)
			 {
			 	if (strlen($a['url']) > 1)
			 	{
			 		echo "<a href='".$a['url']."'>".$a['title']."</a>";		 					 	
			 		echo '<hr>';
			 	}
			 	else
			 	{
			 		$url1 = "<a href='https://news.ycombinator.com/item?id=".$a['objectID']."'>".$a['title']."</a>";
			 		echo $url1;	
			 		echo '<hr>';			 		
			 	}			 	
			 }
		
			 $all21 = $this->hn_api->get_search_by_date('recurring revenue&tags=story&hitsPerPage=500');
			 $all2 = $all21['hits'];
			 //print_r($this->hn_api->get_item($max));
			 echo "<br><br><br><br><br><br><br><br><br><br>";
			 
			 //print_r($all);
			 echo "<h1>Query: 'Recurring Revenue'".$all21['nbHits']."</h1>";
			 foreach ($all2 as $a2)
			 {
			 	if (strlen($a['url']) > 1)
			 	{
			 		echo "<a href='".$a2['url']."'>".$a2['title']."</a>";		 					 	
			 		echo '<hr>';
			 	}
			 	else
			 	{
			 		$url2 = "<a href='https://news.ycombinator.com/item?id=".$a2['objectID']."'>".$a2['title']."</a>";
			 		echo $url2;	
			 		echo '<hr>';			 		
			 	}
			 }
		
		?></p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>