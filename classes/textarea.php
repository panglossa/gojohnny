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
class TTextArea extends TElement {
	/*******************************/
	}

class TMemo extends TTextArea {
	function getprefix(){
		$this->type = 'textarea';
		if(!isset($this->properties['name'])){
			$this->p('name', $this->p('id'));
			}
		return parent::getprefix();
		}
	
	}