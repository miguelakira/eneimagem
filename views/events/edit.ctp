<div class="events form">
<?php echo $form->create('Event');?>
	<fieldset>
 		<legend><?php __('Editar Evento');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title', array('label' => 'Título'));
		echo $form->input('body', array('label' => 'Texto'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Deletar', true), array('action'=>'delete', $form->value('Event.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Event.id'))); ?></li>
		<li><?php echo $html->link(__('Listar Eventos', true), array('action'=>'index'));?></li>
	</ul>
</div>
