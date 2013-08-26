<h1>Amplicons</h1>

<?php

echo $this->Html->link('Add New Amplicon', array('controller' => 'amplicons', 'action' => 'add'), array('class' => 'btn'));

?>
<p></p>

<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>Amplicon name</th>
        <th>Gene Code</th>
        <th>Forward primer</th>
        <th>Reverse primer</th>
        <th>Amplicon size</th>
        <th>PCR program</th>
        <th>Amplified</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Notes</th>
    </tr>
<?php
foreach( $amplicons as $amplicon ) {
    echo "<tr>";

    # amplicon name with links to edit and delete
    echo "<td>" . $this->Html->link($amplicon['Amplicon']['amplicon_name'], array(
        'controller' => 'amplicons',
        'action' => 'view', 
        $amplicon['Amplicon']['amplicon_name']),
        array(
            'title' => 'View amplicon'));
    echo " ";
    echo $this->Html->link('', array(
        'controller' => 'amplicons',
        'action' => 'edit',
        $amplicon['Amplicon']['amplicon_name']),
        array(
            'class' => 'icon-edit',
            'title' => 'edit'
        )
    );
    echo " ";
    echo $this->Form->postLink('', array(
        'controller' => 'amplicons',
        'action' => 'delete',
        $amplicon['Amplicon']['amplicon_name']),
        array(
            'class' => 'icon-remove',
            'title' => 'remove',
            'confirm' => 'Are you sure you want to delete?'
        )
    );
    echo "</td>";

    echo "<td>" . $amplicon['Amplicon']['gene_code'] . "</td>";
    echo "<td>" . $amplicon['Amplicon']['forward_primer'] . "</td>";
    echo "<td>" . $amplicon['Amplicon']['reverse_primer'] . "</td>";
    echo "<td>" . $amplicon['Amplicon']['amplicon_size'] . "</td>";
    echo "<td>" . $amplicon['Amplicon']['pcr_program'] . "</td>";

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
    echo "<td>" . $amplified. "</td>";
    echo "<td>" . $amplicon['Amplicon']['created'] . "</td>";
    echo "<td>" . $amplicon['Amplicon']['modified'] . "</td>";
    echo "<td>" . $amplicon['Amplicon']['notes'] . "</td>";
    echo "</tr>";
}
?>
</table>

