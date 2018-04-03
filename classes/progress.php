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
class TProgress extends TElement {
	/*******************************/
	function __construct($value = 0, $max = 100){
		parent::__construct();
		$this->p('value', $value);
		$this->p('max', $max);
		}
	/*******************************/
	function getcontent(){
		$res = trim(parent::getcontent());
		if($res==''){
			$res = number_format((($this->p('value') * 100) / $this->p('max')), 2) . '%';
			}
		return $res;
		}
	/*******************************/
	}
