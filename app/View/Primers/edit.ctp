<h1>Edit Primers</h1>
<?php
echo $this->Form->create('Primer', array(
    'inputDefaults' => array (
        'div' => 'control-group',
        'label' => array('class' => 'control-label'),
        'between' => '<div class="controls">',
        'after' => '</div>',
        'class' => 'span3',
        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
    )));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('primer_name');
echo $this->Form->input('forward_or_reverse');
echo $this->Form->input('primer_seq');
echo $this->Form->input('primer_seq_size');
echo $this->Form->input('annealing_temp');
echo $this->Form->input('notes', array('rows' => '3'));
echo $this->Form->end(array(
    'label' => 'Save Primer',
    'class' => 'btn'
    ));


?>
