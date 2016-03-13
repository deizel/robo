<?php

namespace Gourmet\Robo\Lib;

use Cake\Core\Configure;
use Robo\Runner as BaseRunner;

class Runner extends BaseRunner {

	/**
	 * Constructor.
	 *
	 * @param string $roboClass
	 * @param string $roboFile
	 * @param string $roboDir
	 */
	public function __construct($roboClass = null, $roboFile = null, $roboDir = null) {
		parent::__construct($roboClass, $roboFile);

		$this->dir = $roboDir ?: $this->dir . DS . 'build';
	}
}
