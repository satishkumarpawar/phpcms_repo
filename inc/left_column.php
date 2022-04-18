
<?php include('inc/container.php');?>
<div style="float:left; Clear:none; width:200px;">
<ul>
<?php

while ($post = $articles->fetch_assoc()) {	

?>
<li><a href="view.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></li>
<?php }?>
</ul>	
</div>