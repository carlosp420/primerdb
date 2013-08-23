<?php
class Primer extends AppModel {
	public $validate = array(
			'primer_name' => array('rule' => 'notEmpty')
	);
}
?>
