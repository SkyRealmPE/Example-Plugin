<?php

namespace RTools;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class MainClass extends PluginBase{

	public function onLoad(){
		$this->getLogger()->info( "I've been loaded!");
	}

	public function onDisable(){
		$this->getLogger()->info("I've been disabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		if(strtolower($command->getName()) === "ping"){
			$sender->sendMessage('Pong');
			return true;
		}
	
		return false;
	}
}
