<h1>Primer 
	<?php 
		echo h($primer['Primer']['id']). ": " . $primer['Primer']['primer_name']; 
		echo " " . $primer['Primer']['forward_or_reverse'];
	?> 
</h1>

<p><small>Created: <?php echo $primer['Primer']['date_creation']; ?></small></p>
<p><small>Last Modified: <?php echo $primer['Primer']['date_modification']; ?></small></p>

<p><?php echo h($primer['Primer']['notes']); ?></p>
