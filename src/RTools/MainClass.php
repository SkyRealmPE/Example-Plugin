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
		$this->getServer()->broadcastMessage(TextFormat::AQUA."RTools Loaded !");
		$this->getLogger()->info(TextFormat::GREEN."+=========== RTOOLS ==========+");
		$this->getLogger()->info(TextFormat::AQUA."| Name    :: RTools           |");
		$this->getLogger()->info(TextFormat::AQUA."| Version :: 0.1.0            |");
		$this->getLogger()->info(TextFormat::AQUA."| Author  :: Jackthehack21    |");
		$this->getLogger()->info(TextFormat::GREEN."+=============================+");
	}

	public function onDisable(){
		$this->getServer()->broadcastMessage(TextFormat::PURPLE."RTools Disabled !");
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