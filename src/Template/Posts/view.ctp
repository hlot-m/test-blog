<?= $this->Html->script('jquery-1.12.3.min'); ?>
<?= $this->Html->script('comments'); ?>
<?= $this->Html->css('comments.css') ?>
<a href="#"><p><?= $this->Html->link("Back to posts", ['action' => 'index']) ?></p></a>

<hr>
<h2><?= h($post->title) ?></h2>
<p><?= h($post->content) ?></p>

<p><small>Created: <?= $post->created->format(DATE_RFC850) ?></small></p>   
<?php
if (!empty($post->modified))
{ ?>
<p><small>Modified: <?= $post->created->format(DATE_RFC850) ?></small></p>    
<?php }
?>

<hr>

<p id="add">Add a comment</p>    	 
	
	<?php 
		$created=date("Y-m-d H:i:s");
		echo $this->Form->create('form',array('id'=>'form'));
		echo $this->Form->input('name',array('id'=>'name' ,'label'=>'name'));
		echo $this->Form->input('email',array('id'=>'email','label'=>'email'));
	echo $this->Form->input('text_comment', array('id'=>'text_comment', 'rows' => '3', 'label'=>'comment')); ?>
	<div id="timestamp">
		<?php echo $this->Form->input('id_post',array('id'=>'id_post', 'value'=>$post->id_post));
		echo $this->Form->input('created', array('id'=>'created', 'value'=>$created)); ?>
	</div>
	<?php echo $this->Form->button('Send Comment', array('id'=>'button'));
		echo $this->Form->end(); 
	?>
	
	
	<?php
	$i=0;
	foreach($comments as $comment): ?>
	<?php  $i++;?>
	<?php endforeach;?>
	<p>Comments: ( <?= $i  ?> ) </p>
	
	
    <?php
	foreach($comments as $comment): ?>
	<table>
		<tr>
    <td><p><?= h($comment->name) ?></p></td>
    <td ><p><?= h($comment->email) ?></p></td>
		</tr>
		<tr>
    <td colspan="2"><p><?= h($comment->text_comment) ?></p></td>
		</tr>
	</table>
	<?php endforeach;?>
	


	
	
	
	
	
	
