<?php

namespace NF\Menus;

/**
* MainMenu Class - Allows you to initialize a menu in the source
* @author garung
* @version 1.0
*/
class VicodersMenu
{
	public $menu;
	public $namespace = 'NF\Menus\Resources';
	public function __construct($menu_name, $params = [])
	{
		$class_name = $this->namespace . '\\' . $menu_name;
		$this->menu = new $class_name($params);
	}

	public function render() {
		return $this->menu->renderView();
	}
}