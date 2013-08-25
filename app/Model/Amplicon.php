<?php
class Amplicon extends AppModel {
	public $validate = array(
			'gene_code' => array('rule' => 'notEmpty', 'required' => true, 'message' => 'For example COI'),
			'amplicon_name' => array('rule' => 'notEmpty', 'required' => true, 'message' => 'For example COI_1'),
			'forward_primer' => array('rule' => 'notEmpty', 'required' => true, 'message' => 'For example LCO'),
			'reverse_primer' => array('rule' => 'notEmpty', 'required' => true, 'message' => 'For example HCO'),
            'amplicon_size' => array(
                'rule' => 'numeric', 
                'allowEmpty' => true,
                'required' => false, 
                'message' => 'For example 250'),
            'amplified' => array(
                'allowedChoice' => array(
                    'rule' => array('inList', array('1', '2', '3')),
                    'message' => 'Enter yes, no, or not yet tested'
                )
            ),
			'primer_seq' => array('rule' => 'notempty'),
            'annealing_temp' => array('rule' => 'numeric', 'message' => 'only numbers allowed'),
	);
}
?>
