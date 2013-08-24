<h1>Add Primers</h1>

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
echo $this->Form->input('primer_name');
echo $this->Form->input('forward_or_reverse');
echo $this->Form->input('primer_seq');
echo $this->Form->input('primer_seq_size');
echo $this->Form->input('annealing_temp');
echo $this->Form->input('date_creation');
echo $this->Form->input('notes');
echo $this->Form->end('Save Primer');
?>
