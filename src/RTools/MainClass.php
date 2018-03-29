<?php

namespace RTools;

use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class MainClass extends PluginBase {

	public function onLoad(){
		$this->getLogger()->info(TextFormat::GREEN."I've been loaded!");
	}

	public function onDisable(){
		$this->getLogger()->info(TextFormat::RED."I've been disabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		$commandName = $command->getName();
		if($commandName == "ping"){
			while(true) {
				$this->getServer()->broadcastMessage("Coming Soon !");
				sleep(3);
			};
			$sender->sendMessage(TextFormat::BLUE."Pong!");
		    return true;
		}
		return false;
	}
}