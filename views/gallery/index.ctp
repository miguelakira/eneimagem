
<div class="post">
<h2><?php echo $currset['title']?></h2>
<p><?php echo $currset['description']?></p>
</div>


<?php
//$recent = $flickr->photos_getRecent();
//print_r($recent);
//
//foreach ($recent['photo'] as $photo) {
//    $owner = $flickr->people_getInfo($photo['owner']);
//    echo "<a href='http://www.flickr.com/photos/" . $photo['owner'] . "/" . $photo['id'] . "/'>";
//    echo $photo['title'];
//    echo "</a> Owner: ";
//    echo "<a href='http://www.flickr.com/people/" . $photo['owner'] . "/'>";
//    echo $owner['username'];
//    echo "</a><br>";
//}
?>

<ul>
<?php foreach($sets['photoset'] as $item): ?>
    <li><?php echo $html->link($item['title'], '/gallery/' . $item['id']);?></li>
    <?php endforeach; ?>
</ul>


<p><img id="mainimg" src="<?php echo $flickr->buildPhotoURL($thumbs['photoset']['photo'][0], 'medium')?>" title="<?php echo $thumbs['photoset']['photo'][0]['title']?>"  alt="<?php echo $thumbs['photoset']['photo'][0]?>" /></p>

 <?php foreach($thumbs['photoset']['photo'] as $item): ?>
<a href="<?php echo $flickr->buildPhotoURL($item, "medium")?>" title="<?php echo $item['title']?>"><img src="<?php echo $flickr->buildPhotoURL($item, "thumbnail")?>" alt="<?php echo $item['title']?>" /></a>
 <? endforeach; ?>
 
 
 
 
 