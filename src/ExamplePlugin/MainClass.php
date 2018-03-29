<?php

namespace ExamplePlugin;

use pocketmine\plugin\PluginBase;

class MainClass extends PluginBase{

	public function onLoad(){
		$this->getLogger()->info("Plugin Loaded");
	}
}
