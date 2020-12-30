<?php

namespace firstjoinui;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\SimpleCommandMap;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\scheduler\Task;
use jojoe77777\FormAPI\SimpleForm;
use firstjoinui\commands\Jtitle;
use firstjoinui\commands\Jtext;
use firstjoinui\task\uitask;

class Main extends PluginBase implements Listener {
	
	public static $prefix = "§7[§bFirstJoinUI§7]  ";
	
	public static $Main;
	
	private $messages;
	
	public function onEnable(): void {
		$this->getServer()->getLogger()->notice("§aPlugin FirstJoinUI enable!");
		@mkdir($this->getDataFolder());
		$this->saveResource("messages.yml");
		$this->saveResource("player.yml");
		$this->messages = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
		$this->player = new Config($this->getDataFolder() . "player.yml", Config::YAML);		
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getCommandMap()->register("jtitle", new Jtitle($this));
		$this->getServer()->getCommandMap()->register("jtext", new Jtext($this));
	}
	
	public function getMessage($id){
		if($this->messages->exists($id)){
			return $this->messages->get($id);
		}
		return false;
	}
	
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {

        switch ($command->getName()) {
            case "fjoin":
                if ($sender instanceof Player) {
					if($sender->hasPermission("firstjoinui.command")){
                        $this->openMyForm($sender);
                    } else {
						$sender->sendMessage("§cYou dont have the Permission!");
					}
				} else {
					$sender->sendMessage("§cUse Ingame!");
				}
                break;
        }
        return true;
    }

    public function onPlayerJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$config = new Config($this->getDataFolder().'player.yml', Config::YAML);
		if (!$config->exists($player->getName())){
			$this->getScheduler()->scheduleDelayedTask(new uitask($this, $player), 20);
			$config->set($player->getName());
			$config->save();
		}
	}
	
	private function replace(Player $player, string $text) : string {
		$from = ["{world}", "{player}", "{online}", "{max_online}", "{line}"];
		$to = [
			$player->getLevel()->getName(),
			$player->getName(),
			count($this->getServer()->getOnlinePlayers()),
			$this->getServer()->getMaxPlayers(),
			"\n"
		];
		return str_replace($from, $to, $text);
	}
	
	public function openMyForm(Player $player){
        $form = new SimpleForm(function (Player $player, int $data = null) use (&$form) {
        $result = $data;
            if ($result === null) {
                return;
            }
            switch ($result) {
                case 0:
			    break;
		    }
		});
		$form->setTitle($this->replace($player, $this->getMessage("title")));
        $form->setContent($this->replace($player, $this->getMessage("text")));
		$form->addButton("§cExit");
        $player->sendForm($form);
        return $form;
	}
	
	public const prefix = "§7[§bFirstJoinUI§7]  ";
}