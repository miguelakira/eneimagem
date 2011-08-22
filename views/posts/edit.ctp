<div class="posts form">
<?php echo $form->create('Post');?>
	<fieldset>
 		<legend><?php __('Editar Notícia');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title', array('label' => 'Título'));
		echo $form->input('intro', array('label' => 'Introdução'));
		echo $form->input('body', array('label' => 'Texto'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Deletar', true), array('action'=>'delete', $form->value('Post.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Post.id'))); ?></li>
		<li><?php echo $html->link(__('Listar Notícias', true), array('action'=>'index'));?></li>
	</ul>
</div>
