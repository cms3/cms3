<?php

namespace CMS3\Engine;

interface Renderer_Interface {

	public function render($name, array $params = array());
}