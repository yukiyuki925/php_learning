<!-- <?php 
$xmlTree = simplexml_load_file('rss.xml');
foreach ($xmlTree->channel->item as $item):
?>
・<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
?> -->

<?php 
$file = file_get_contents("feed.json");
$json = json_decode($file);

foreach($json->items as $item):
?>
・<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a><br>
<?php endforeach ?>