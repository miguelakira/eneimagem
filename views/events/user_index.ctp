<?php foreach ($events as $event): ?>
	<b><br /><?php echo $event['Event']['title'];?></b></p>
	<small><?php $duedate = date('d/m/Y', strtotime($event['Event']['created'])); // modifica o datetime pra dd/mm/aaaa
		if($duedate != '31/12/1969'){ // Prevenir a exibição de '31/12/1969' caso 'created' não exista
			echo $duedate;
		} ?></small>
	<p><?php echo $event['Event']['body']?></p>
<?php endforeach; ?>