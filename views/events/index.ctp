<h2><?php __('Eventos');?></h2>
<p class ="links" > <?php echo $html->link('Notícias', array('controller' => 'posts', 'action' => 'index')); ?> </p>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Página %page% de %pages%, mostrando %current% eventos de um total de %count%, iniciando em %start%, e terminando em %end%', true)
));
?></p>
<table>
<tr>
	<th><?php echo $paginator->sort('ID','id');?></th>
	<th><?php echo $paginator->sort('Título', 'title');?></th>
	<th><?php __('Actions');?></th>
	<th><?php echo $paginator->sort('Criado em', 'created');?></th>
	
</tr>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Event', true), array('action'=>'add')); ?></li>
	</ul>
</div>


<?php
$i = 0;
foreach ($events as $event):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $event['Event']['id']; ?>
		</td>
		<td>
			<?php echo $event['Event']['title']; ?>
		</td>
		<td class = "actions">
			<?php echo $html->link(__('Ver', true), array('action'=>'view', $event['Event']['id'])); ?>
			<?php echo $html->link(__('Editar', true), array('action'=>'edit', $event['Event']['id'])); ?>
			<?php echo $html->link(__('Deletar', true), array('action'=>'delete', $event['Event']['id']), null, sprintf(__('Tem certeza que quer deletar # %s?', true), $event['Event']['id'])); ?>
		</td>
		<td>
			<?php $duedate = date('d/m/Y', strtotime($event['Event']['created'])); // modifica o datetime pra dd/mm/aaaa
				if($duedate != '31/12/1969'){ // Quando 'created' nao existe, ele mostra essa data. Esse if previne isso.
			echo $duedate;
		} ?>
		</td>

	</tr>
<?php endforeach; ?>
</table>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
