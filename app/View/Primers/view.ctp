<h1>Primer:  
	<?php 
		echo h($primer['Primer']['primer_name']) . " " . strtoupper($primer['Primer']['forward_or_reverse']);
	?> 
</h1>


<div class="row">

<div class="span5">
<table class="table table-striped table-bordered">
    <tr>
        <td><b>Primer sequence:</b></td>
        <td><?php echo h($primer['Primer']['primer_seq']); ?></td> 
    </tr>
    <tr>
        <td><b>Primer sequence size:</b></td>
        <td><?php echo h($primer['Primer']['primer_seq_size']); ?></td> 
    </tr>
    <tr>
        <td><b>Annealing temperature:</b></td>
        <td><?php echo h($primer['Primer']['annealing_temp']); ?></td> 
    </tr>
    <tr>
        <td><b>Date created:</b></td>
        <td><?php echo h($primer['Primer']['created']); ?></td> 
    </tr>
    <tr>
        <td><b>Date modified:</b></td>
        <td><?php echo h($primer['Primer']['modified']); ?></td> 
    </tr>
    <tr>
        <td><b>Notes:</b></td>
        <td><?php echo h($primer['Primer']['notes']); ?></td> 
    </tr>
</table>
</div>

</div><!-- end row -->
