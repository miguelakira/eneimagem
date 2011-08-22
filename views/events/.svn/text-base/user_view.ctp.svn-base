 
<div id = "body">
<h1><?php echo $event['Event']['title']?></h1>
<p><?php echo $event['Event']['body']?></p>
<p><small>Escrito em: <?php $duedate = date('d/m/Y', strtotime($event['Event']['created'])); // modifica o datetime pra dd/mm/aaaa
				if($duedate != '31/12/1969'){ // Quando 'created' nao existe, ele mostra essa data. Esse if previne isso.
			echo $duedate;
		} ?>
</div>
