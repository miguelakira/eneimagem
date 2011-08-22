<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Listar notícias', true), array('action'=>'index'));?></li>
	</ul>
</div>



<?php echo $form->create('Post');?>
	<fieldset>
 		<legend><?php __('Adicionar Notícia');?></legend>
	<?php
		echo $form->input('title', array('label'=>'Título'));
		echo $form->input('intro', array('label'=>'Introdução'));
		echo $form->input('body', array('rows'=>'5', 'label'=>'Texto'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
