<?php $i=0;
foreach($comments as $comment): ?>
<p><?= h($comment->text_comment) ?></p>
<p><?= h($comment->name) ?></p>
<p><?= h($comment->email) ?></p>
<?php  $i++;?>
<?php endforeach;?>
<p>count:<?= $i ?></p>

