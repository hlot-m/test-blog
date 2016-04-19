<?php
	$created=date("Y-m-d H:i:s");
    echo $this->Form->create($comment);
    echo $this->Form->input('name');
	echo $this->Form->input('email');
	echo $this->Form->input('text_comment', ['rows' => '3']);
	echo $this->Form->input('created', array('value'=>$created));
    echo $this->Form->button(__('Save Comment'));
    echo $this->Form->end();
?>