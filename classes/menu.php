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
class TMenu extends TElement {
	////////////////////////////////////////////////
	function init(){
		parent::init();
		$this->p('type', 'toolbar');
		}
	////////////////////////////////////////////////
	function getcontent(){
		$res = '';
		foreach($this->items as $item){
			$res .= "<li>{$item}</li>\n";
			}
		return $res;
		}
	////////////////////////////////////////////////
	}
