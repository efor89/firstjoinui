<?php

declare(strict_types=1);

namespace firstjoinui\task;

use firstjoinui\Main;
use pocketmine\scheduler\Task;
use pocketmine\player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\SimpleCommandMap;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\Server;

class uitask extends Task{

    private $player;
    private $plugin;

    public function __construct(Main $plugin, Player $player){
        $this->plugin = $plugin;
        $this->player = $player;
    }

    public function onRun(int $currentTick){
		$config = new Config($this->plugin->getDataFolder().'cmd.yml', Config::YAML);
	        $plconfig = new Config($this->plugin->getDataFolder() . "player.yml", Config::YAML);
		$player = $this->player->getName();
        $this->plugin->openMyForm($this->player);
		if ($config->exists("cmd")){
		        if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd", ""));
		}
		       }
		if ($config->exists("cmd1")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd1", ""));
		}
			}
		if ($config->exists("cmd2")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd2", ""));
		}
	                }
		if ($config->exists("cmd3")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd3", ""));
		}
			   }
		if ($config->exists("cmd4")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd4", ""));
		}
			   }
		if ($config->exists("cmd5")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd5", ""));
		}
			   }
		if ($config->exists("cmd6")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd6", ""));
		}
			   }
		if ($config->exists("cmd7")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd7", ""));
		}
			   }
		if ($config->exists("cmd8")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd8", ""));
		}
			   }
		if ($config->exists("cmd9")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    $this->plugin->getServer()->dispatchCommand($this->player, $config->get("cmd9", ""));
		}
			   }
		if ($config->exists("ccmd")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd", "")));
            }
		}
			   }
		if ($config->exists("ccmd1")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd1", "")));
            }
		}
			   }
		if ($config->exists("ccmd2")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd2", "")));
            }
		}
			   }
		if ($config->exists("ccmd3")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd3", "")));
            }
		}
			   }
		if ($config->exists("ccmd4")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd4", "")));
            }
		}
			   }
		if ($config->exists("ccmd5")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd5", "")));
            }
		}
			   }
		if ($config->exists("ccmd6")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd6", "")));
            }
		}
			   }
		if ($config->exists("ccmd7")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd7", "")));
            }
		}
			   }
		if ($config->exists("ccmd8")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd8", "")));
            }
		}
			   }
		if ($config->exists("ccmd9")){
			if(!$plconfig->exists($this->player->getName() . "join")){
				$plconfig->set($this->player->getName() . "join");
				$plconfig->save();
		    foreach($this->plugin->getServer()->getOnlinePlayers() as $player){
                $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender(), str_replace("{player}", '"'.$player->getName().'"', $config->get("ccmd9", "")));
            }
		}
			   }
    }

}
