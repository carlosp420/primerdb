<h1>Edit Amplicons</h1>
<?php
echo $this->Form->create('Amplicon', array(
    'inputDefaults' => array (
        'div' => 'control-group',
        'label' => array('class' => 'control-label'),
        'between' => '<div class="controls">',
        'after' => '</div>',
        'class' => 'span3',
        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
    )));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('amplicon_name');
echo $this->Form->input('gene_code');
echo $this->Form->input('forward_primer');
echo $this->Form->input('reverse_primer');
echo $this->Form->input('amplicon_size');
echo $this->Form->input('pcr_program');

$options = array(0 => '', 1 => "yes", 2 => "no", 3 => "not yet tested");
echo $this->Form->input('amplified', array('type' => 'select', 'options' => $options));

echo $this->Form->input('notes', array('rows' => '3'));
echo $this->Form->end(array(
    'label' => 'Save Amplicon',
    'class' => 'btn'
    ));


?>
