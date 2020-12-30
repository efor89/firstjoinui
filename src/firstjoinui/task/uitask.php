<?php

declare(strict_types=1);

namespace firstjoinui\task;

use firstjoinui\Main;
use pocketmine\scheduler\Task;
use pocketmine\player;

class uitask extends Task{

    private $player;
    private $plugin;

    public function __construct(Main $plugin, Player $player){
        $this->plugin = $plugin;
        $this->player = $player;
    }

    public function onRun(int $currentTick){
        $this->plugin->openMyForm($this->player);
    }

}