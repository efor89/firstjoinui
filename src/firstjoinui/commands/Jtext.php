<?php

namespace firstjoinui\commands;

use pocketmine\command\Command;
use firstjoinui\Main;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

class Jtext extends Command {

    public function __construct(Main $pl) {
        $this->plugin = $pl;
        parent::__construct("jtext", Main::prefix . "JText", "jtext");
        $this->setPermission("firstjoinui.command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if ($sender instanceof Player) {
            if ($sender->hasPermission("firstjoinui.command")) {
				$config = new Config($this->plugin->getDataFolder().'messages.yml', Config::YAML);
				$msg = implode(' ', $args);
		        $config->set("text", $msg);
				$config->save();	
				$sender->sendMessage(Main::prefix . "§aYou set the text§f: §r" . $msg);
			} else {
                $sender->sendMessage(Main::prefix . "§cYou dont have the Permission!");
            }
        } else {
            $sender->sendMessage(Main::prefix . "§cUse Ingame!");
        }
        return true;
    }
}