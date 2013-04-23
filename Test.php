<?php

class Test {
	
	protected $obj;

	function __construct($input) {
		$this->obj = $input;
	}

	function getSandbox() {
		return $this->obj;
	}
}