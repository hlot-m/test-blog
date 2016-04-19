<?= $this->Html->css('comments.css') ?>
<h1>Add New Post</h1>
<?php
    $created=date("Y-m-d H:i:s");
    echo $this->Form->create($post);
    echo $this->Form->input('title');
    echo $this->Form->input('content', ['rows' => '15']);
?>
<div id="timestamp">
	<?php   
	echo $this->Form->input('created', array('value'=>$created));
	echo $this->Form->input('modified', array('value'=>$created));
	?>
</div>
<br><?php	
	echo $this->Form->button(__('Save Post'));
	echo $this->Form->button('Cancel', array('type' => 'button', 
	'onclick' => "location.href='index'"));
    echo $this->Form->end();
?>
