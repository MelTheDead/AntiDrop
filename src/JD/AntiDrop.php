<?php

namespace JD;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\plugin\PluginBase;

class AntiDrop extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Enable");
    }

    public function onDrop(PlayerDropItemEvent $ev){
        $ev->setCancelled(true);
    }
}