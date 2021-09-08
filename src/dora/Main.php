<?php

namespace dora;

use pocketmine\server;
use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\event\Listener;
use pocketmine\command\{CommandSender, Command};
use phuongaz\PickaxeLevel as Loader;

class Main extends PluginBase implements Listener{

public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("\n\n>>>>>>>>>>>>>\n\nPiCkAxE MeNu V1\n\n<<<<<<<<<<<<\n By DoraOkatu\n\n\n\n");
  }
public function onCommand(CommandSender $player, Command $cmd, String $label, Array $format):bool{
    if($cmd->getName() == "menucup"):
    if($player instanceof Player){
    $this->menu($player);
}
   return true;
  }
public function menu($player){
  $api = $this->getServer->getPluginManager()->getPlugin("FormAPI");
  $papi = $this->getServer()->getPluginManager()->getPlugin("V3PickaxeLevel");
  $form = $api->createSimpleForm(function(Player $player, int $data = null){
  $result = $data;
  if($result === null){
return true;
}
$name = $this->getPlayer()->getName();
   switch $result;
    case 0:
      $this->getPlayer()->dispatchCommand($player, "givecup" . $name . );
    break;
     case 1:
      $this->button2($player);
    break;
}
   $form->setTitle("§c§l♦§bFELLMC PICKAXE§c♦");
   $form->setContent("§e§lYo," . $name . "\n§c§l→Level:§e" . $nbt->getInt("Pexp"). "§a\" . $nbt->getInt("Pnext"). "\n§b§l→Vui Lòng Chọn");
   $form->addButton("§e§lGiveCup");
 $this->SendToPlayer($player);
)};
   
  }
}
