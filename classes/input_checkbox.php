<?php
/*
Panglossa go!Johnny PHP library
version 7.0
release 2017-07-05
Please see the readme.txt file that goes with this source.
Licensed under the GPL, please see:
http://www.gnu.org/licenses/gpl-3.0-standalone.html
panglossa@yahoo.com.br
Ara�atuba - SP - Brazil - 2017
*/
if(!class_exists('TInput')){
	require_once(GJ_PATH_LOCAL . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'input.php');
	}
class TCheckBox extends TInput {
	/*******************************/
	function __construct($label = '', $checked = false, $value = 1){
		parent::__construct();
		$this->label = $label;
		$this->type = 'input';
		$this->p('type', 'checkbox');
		$this->p('checked', $checked);
		$this->p('value', $value);
		}
	/*******************************/
	function show(){
		return parent::show() . "<label for=\"{$this->properties['id']}\">" . $this->label . '</label>';
		}
	/*******************************/
	}
