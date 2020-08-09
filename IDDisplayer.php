<?php

namespace MonoAdrian23;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;

class ItemID extends PluginBase implements Listener {

        public $slogan = "§l§5ID§r";
        
	public function onEnable()
	{
		  $this->getLogger()->info("IDDisplayer made by MonoAdrian23");
                  $this->getServer()->getPluginManager()->registerEvents($this ,$this);
        }
        
        public function ItemHeld(PlayerItemHeldEvent $event)
        {
            $pl = $event->getPlayer();
            {
            $pl->sendTip($this->slogan . " " . $event->getItem()->getId() . ":" . $event->getItem()->getDamage());
            }
        }

}
