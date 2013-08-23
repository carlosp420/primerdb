<h1>Primers</h1>
<table>
    <tr>
        <th>Primer Id</th>
        <th>Primer Name</th>
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
        <td><?php echo $primer['Primer']['id']; ?></td>
        <td> <?php echo $this->Html->link($primer['Primer']['primer_name'], array('controller' => 'primers', 'action' => 'view', $primer['Primer']['id'])); ?> </td>
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
