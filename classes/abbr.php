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
class TAbbr extends TElement {
	/*******************************/
	function __construct($content = '', $title = ''){
		$this->uid = md5(uniqid(rand(), TRUE));//assign a unique random id
		$this->setclass();//assign a provisional class from its php class name
		$this->add($content);
		$this->p('title', $title);
		}
	/*******************************/
	}