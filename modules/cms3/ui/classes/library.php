<?php

namespace CMS3\UI;

use CMS3\Engine\Singleton;

abstract class Library extends Singleton {
	
	public abstract function control($name);
}