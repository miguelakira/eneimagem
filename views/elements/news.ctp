<?php $posts = $this->requestAction('/noticias/last_posted'); ?>
<?php foreach ($posts as $post): ?>
	
	<br /> <small> <b><?php echo $post['Post']['title']?></b></small>
	
	<small><br /> <?php echo $post['Post']['intro']?></small>
	
	<small><br /> <?php echo $html->link('ler mais...', array('controller' => 'noticias', 'action' => 'view', $post['Post']['id'])); ?></small> 
	
	<div id = "righty"><small><?php $duedate = date('d/m/Y', strtotime($post['Post']['created'])); // modifica o datetime pra dd/mm/aaaa
		if($duedate != '31/12/1969'){ // Prevenir a exibição de '31/12/1969' caso 'created' não exista
			echo $duedate;
		} ?></small></div>
		
<?php endforeach; ?>