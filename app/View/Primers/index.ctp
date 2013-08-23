<h1>Primers</h1>

<?php
echo $this->Html->link('Add New Primer', array('controller' => 'primers', 'action' => 'add'),
                                     array('class' => 'btn')
        );
?>

<p></p>

<table class="table table-striped table-bordered">
    <tr>
        <th>Primer Id</th>
        <th>Direction</th>
        <th>Primer Seq</th>
        <th>Primer Seq Size</th>
        <th>Annealing Temp</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Notes</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($primers as $primer): ?>
    <tr>
        <td> 
			<?php 
				echo $this->Html->link($primer['Primer']['primer_name'], array('controller' => 'primers', 'action' => 'view', $primer['Primer']['id'])); 
                echo "";
				echo " " . $this->Html->link('',     array('action' => 'edit',   $primer['Primer']['id']), array('class' => 'icon-edit', 'title' => 'edit'));
                echo " " . $this->Form->postLink('', 
                                                     array('action' => 'delete', $primer['Primer']['id']), 
                                                     array('class' => 'icon-remove', 'title' => 'remove', 'confirm' => 'Are you sure you want to delete?')
                                                 );
			?> 
		</td>
		<td> <?php echo $primer['Primer']['forward_or_reverse']; ?></td>
		<td> <?php echo $primer['Primer']['primer_seq']; ?></td>
		<td> <?php echo $primer['Primer']['primer_seq_size']; ?></td>
		<td> <?php echo $primer['Primer']['annealing_temp']; ?></td>
        <td><?php echo $primer['Primer']['date_creation']; ?></td>
        <td><?php echo $primer['Primer']['date_modification']; ?></td>
        <td><?php echo $primer['Primer']['notes']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($primer); ?>
</table>
