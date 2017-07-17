<?php foreach ($data as $key => $value):?>
<p><a href="index.php?c=post&a=show&id=<?=$value['id']?>"><?=$value['title'];?></a></p>
<p><?=$value['text'];?></p>
<?php endforeach;?>