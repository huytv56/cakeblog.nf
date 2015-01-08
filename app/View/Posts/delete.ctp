<h1>Delete post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('row','3'));
echo $this->Form->hidden('id');
echo $this->Form->end('Delete Post');
?>