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
		setInterval(function() {
			$this->getServer()->broadcastMessage("Coming Soon !");
		}, 6000)
	}

	public function onDisable(){
		$this->getLogger()->info(TextFormat::RED."I've been disabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		$commandName = $command->getName();
		if($commandName == "ping"){
			$sender->sendMessage(TextFormat::BLUE."Pong!");
		    return true;
		}
		return false;
	}
}