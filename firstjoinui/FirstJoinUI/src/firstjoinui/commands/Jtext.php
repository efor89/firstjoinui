<?php

namespace firstjoinui\commands;

use pocketmine\command\Command;
use firstjoinui\main;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

class Jtext extends Command {

    public function __construct(main $pl) {
        $this->plugin = $pl;
        parent::__construct("jtext", main::prefix . "JText", "jtext");
        $this->setPermission("firstjoinui.command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if ($sender instanceof Player) {
            if ($sender->hasPermission("firstjoinui.command")) {
				    $config = new Config($this->plugin->getDataFolder().'messages.yml', Config::YAML);
					$msg = implode(' ', $args);
			        $config->set("text", $msg);
					$config->save();	
					$sender->sendMessage(main::prefix . "§aDu hast den Text gesetzt§f: §r" . $msg);
			} else {
                $sender->sendMessage(main::prefix . "§cDafür hast du keine Rechte!");
            }
        } else {
            $sender->sendMessage(main::prefix . "§cBenutze denn befehl im Spiel!");
        }
        return true;
    }
}