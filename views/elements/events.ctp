<?php $events = $this->requestAction('/events/last_posted'); ?>
<?php foreach ($events as $event): ?>
	
	<br /> <small> <b><?php echo $event['Event']['title']?></b></small>
	
	<small><br /> <?php echo $html->link('ler mais...', array('controller' => 'events', 'action' => 'user_view', $event['Event']['id'])); ?></small> 
	
	<div id = "righty"><small><?php $duedate = date('d/m/Y', strtotime($event['Event']['created'])); // modifica o datetime pra dd/mm/aaaa
		if($duedate != '31/12/1969'){ // Prevenir a exibição de '31/12/1969' caso 'created' não exista
			echo $duedate;
		} ?></small></div>
		
<?php endforeach; ?>