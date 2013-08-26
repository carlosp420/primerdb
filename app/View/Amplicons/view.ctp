<h1>Amplicon:  
	<?php 
		echo h($amplicon['Amplicon']['amplicon_name']);
	?> 
</h1>


<div class="row">

<div class="span5">
<table class="table table-striped table-bordered">
    <tr>
        <td><b>Gene Code:</b></td>
        <td><?php echo h($amplicon['Amplicon']['gene_code']); ?></td> 
    </tr>
    <tr>
        <td><b>Forward Primer:</b></td>
        <td><?php echo h($amplicon['Amplicon']['forward_primer']); ?></td> 
    </tr>
    <tr>
        <td><b>Reverse Primer:</b></td>
        <td><?php echo h($amplicon['Amplicon']['reverse_primer']); ?></td> 
    </tr>
    <tr>
        <td><b>Amplicon Size:</b></td>
        <td><?php echo h($amplicon['Amplicon']['amplicon_size']); ?></td> 
    </tr>
    <tr>
        <td><b>PCR Program:</b></td>
        <td><?php echo h($amplicon['Amplicon']['pcr_program']); ?></td> 
    </tr>
    <tr>
        <td><b>Amplified:</b></td>
        <td><?php 
                $amplified = $amplicon['Amplicon']['amplified'];
                if( $amplified == "1" ) {
                    $amplified = "yes";
                }
                elseif( $amplified == "2" ) {
                    $amplified = "no";
                }
                elseif( $amplified == "3" ) {
                    $amplified = "not yet tested";
                }
                else {
                    $amplified = "";
                }

                echo h($amplified); ?></td> 
    </tr>
    <tr>
        <td><b>Date created:</b></td>
        <td><?php echo h($amplicon['Amplicon']['created']); ?></td> 
    </tr>
    <tr>
        <td><b>Date modified:</b></td>
        <td><?php echo h($amplicon['Amplicon']['modified']); ?></td> 
    </tr>
    <tr>
        <td><b>Notes:</b></td>
        <td><?php echo h($amplicon['Amplicon']['notes']); ?></td> 
    </tr>
</table>
</div>

</div><!-- end row -->
