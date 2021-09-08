<?php

namespace dora;

use pocketmine\server;
use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("\n\n>>>>>>>>>>>>>\n\nPiCkAxE MeNu V1\n\n<<<<<<<<<<<<\n By DoraOkatu\n\n\n\n");
  }
}
