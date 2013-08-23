<?php
class Primer extends AppModel {
	public $validate = array(
			'primer_name' => array('rule' => 'notEmpty', 'required' => true),
            'forward_or_reverse' => array(
                'allowedChoice' => array(
                    'rule' => array('inList', array('F', 'R', 'f', 'r')),
                    'message' => 'Enter either F or R'
                )
            ),
			'primer_seq' => array('rule' => 'notempty'),
			'annealing_temp' => array('rule' => 'numeric', 'message' => 'only numbers allowed')
	);
}
?>
