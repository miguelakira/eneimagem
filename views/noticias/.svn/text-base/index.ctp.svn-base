<?php foreach ($posts as $post): ?>
	<b><br /><?php echo $post['Post']['title'];?></b></p>
	<small><?php $duedate = date('d/m/Y', strtotime($post['Post']['created'])); // modifica o datetime pra dd/mm/aaaa
		if($duedate != '31/12/1969'){ // Prevenir a exibição de '31/12/1969' caso 'created' não exista
			echo $duedate;
		} ?></small>
	<p><?php echo $post['Post']['body']?></p>
<?php endforeach; ?>