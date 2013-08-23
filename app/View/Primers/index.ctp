<h1>Primers</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($primers as $primer): ?>
    <tr>
        <td><?php echo $primer['Primer']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($primer['Primer']['title'],
array('controller' => 'posts', 'action' => 'view', $primer['Primer']['id'])); ?>
        </td>
        <td><?php echo $primer['Primer']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($primer); ?>
</table>
