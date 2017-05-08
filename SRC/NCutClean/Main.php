<?php

namespace NCutClean;

use pocketmine\event\block\BlockBreakEvent;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

public function OnEnable(){
   $this->getLogger()->info("NCutClean enabled! Made by tbhnova");
   $this->getServer()->getPluginManager()->registerEvents($this, $this);
 }

public function onBreak(BlockBreakEvent $event){
      if($event->getBlock()->getId() == 14){
   $drops = array(Item::get (266, 0, 1));
      $event->setDrops($drops);
      
    }
    
   if($event->getBlock()->getId() == 15){
   $drops = array(Item::get (265, 0, 1));
      $event->setDrops($drops);
      
    }
    
   if($event->getBlock()->getId() == 56){
   $drops = array(Item::get (264, 0, 1));
      $event->setDrops($drops);
      
   }
  }
 }
}

public function OnDisable(){
   $this->getLogger()->info("NCutClean Disabled!");
    }
  }
