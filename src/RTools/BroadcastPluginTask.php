<?php

namespace RTools;

use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;

class BroadcastPluginTask extends PluginTask{

	public function onRun($currentTick){
		Server::getInstance()->broadcastMessage("[RTools] I've run on tick " . $currentTick);
	}
}
