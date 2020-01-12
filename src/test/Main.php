<?php

declare(strict_types=1);

namespace test;

use pocketmine\plugin\PluginBase;
use pocketmine\block\Block;
use pocketmine\entity\Attribute;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\inventory\ChestInventory;
use pocketmine\network\mcpe\protocol\ChangeDimensionPacket;
use pocketmine\network\mcpe\protocol\PlayStatusPacket;
use pocketmine\item\Item;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\Player;
use pocketmine\tile\Chest;
use pocketmine\tile\Tile;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\Server;
use pocketmine\inventory\Inventory;
use pocketmine\utils\Config;


class Main extends PluginBase implements Listener {

	public function onEnable(){
		
		$this->saveResource("key.yml");
		$key = new Config($this->getDataFolder() . "key.yml", Config::YAML);
		
		if(empty($key->get("key"))){
			
			$this->getLogger()->notice(" The Key Error Please Contact With LaithYoutuber to get key! ");
			$this->getServer()->shutdown();
			
		} elseif($key->get("key") !== base64_decode("TGFpdGhZb3V0dWJlcjE5")){
			
			$this->getLogger()->notice(" The Key Error Please Contact With LaithYoutuber to get key! ");
			$this->getServer()->shutdown();
			
		}else {
			$this->getLogger()->info(" Enabled AutoArmor By LaithYT Copyright 2020 LaithYoutuber");
			$this->getServer()->getPluginManager()->registerEvents($this, $this);
		}
	}

	/*
			OnTap To Get Armor 
			Copyright 2019 LaithYoutuber
	*/
	public function Tap(PlayerItemHeldEvent $event){
    	  $item = $event->getItem();
		  $player = $event->getPlayer();
    	  if($item->getName() === "Diamond Helmet"){
			$dh = Item::get(310, 0, 1);
			$player->getInventory()->remove($dh);
			$player->getArmorInventory()->setHelmet($dh);
			}
		  if($item->getName() === "Diamond Chestplate"){
    	  	$dc = Item::get(311, 0, 1);
			$player->getInventory()->remove($dc);
			$player->getArmorInventory()->setChestplate($dc);
    	  }
		  if($item->getName() === "Diamond Leggings"){
    	  	$dl = Item::get(312, 0, 1);
			$player->getInventory()->remove($dl);
			$player->getArmorInventory()->setLeggings($dl);
    	  }
		  if($item->getName() === "Diamond Boots"){
    	  	$db = Item::get(313, 0, 1);
			$player->getInventory()->remove($db);
			$player->getArmorInventory()->setBoots($db);
    	  }
		  if($item->getName() === "Leather Cap"){
    	  	$lc = Item::get(298, 0, 1);
			$player->getInventory()->remove($lc);
			$player->getArmorInventory()->setHelmet($lc);
    	  }
		  if($item->getName() === "Leather Tunic"){
    	  	$lt = Item::get(299, 0, 1);
			$player->getInventory()->remove($lt);
			$player->getArmorInventory()->setChestplate($lt);
    	  }
		  if($item->getName() === "Leather Pants"){
    	  	$lp = Item::get(300, 0, 1);
			$player->getInventory()->remove($lp);
			$player->getArmorInventory()->setLeggings($lp);
    	  }
		   if($item->getName() === "Leather Boots"){
    	  	$lb = Item::get(301, 0, 1);
			$player->getInventory()->remove($lb);
			$player->getArmorInventory()->setBoots($lb);
    	  }
		  if($item->getName() === "Chainmail Helmet"){
    	  	$ch = Item::get(302, 0, 1);
			$player->getInventory()->remove($ch);
			$player->getArmorInventory()->setHelmet($ch);
    	  }
		  if($item->getName() === "Chain Chestplate"){
    	  	$cc = Item::get(303, 0, 1);
			$player->getInventory()->remove($cc);
			$player->getArmorInventory()->setChestplate($cc);
    	  }
		  if($item->getName() === "Chain Leggings"){
    	  	$cl = Item::get(304, 0, 1);
			$player->getInventory()->remove($cl);
			$player->getArmorInventory()->setLeggings($cl);
    	  }
		  if($item->getName() === "Chainmail Boots"){
    	  	$cb = Item::get(305, 0, 1);
			$player->getInventory()->remove($cb);
			$player->getArmorInventory()->setBoots($cb);
    	  }
		  if($item->getName() === "Iron Helmet"){
    	  	$ih = Item::get(306, 0, 1);
			$player->getInventory()->remove($ih);
			$player->getArmorInventory()->setHelmet($ih);
    	  }
		  if($item->getName() === "Iron Chestplate"){
    	  	$ic = Item::get(307, 0, 1);
			$player->getInventory()->remove($ic);
			$player->getArmorInventory()->setChestplate($ic);
    	  }
		  if($item->getName() === "Iron Leggings"){
    	  	$il = Item::get(308, 0, 1);
			$player->getInventory()->remove($il);
			$player->getArmorInventory()->setLeggings($il);
    	  }
		  if($item->getName() === "Iron Boots"){
    	  	$ib = Item::get(309, 0, 1);
			$player->getInventory()->remove($ib);
			$player->getArmorInventory()->setBoots($ib);
    	  }
		  if($item->getName() === "Gold Helmet"){
    	  	$gh = Item::get(314);
			$player->getInventory()->remove($gh);
			$player->getArmorInventory()->setHelmet($gh);
    	  }
		  if($item->getName() === "Gold Chestplate"){
    	  	$gc = Item::get(315);
			$player->getInventory()->remove($gc);
			$player->getArmorInventory()->setChestplate($gc);
    	  }
		  if($item->getName() === "Gold Leggings"){
    	  	$gl = Item::get(316);
			$player->getInventory()->remove($gl);
			$player->getArmorInventory()->setLeggings($gl);
    	  }
		  if($item->getName() === "Gold Boots"){
    	  	$gb = Item::get(317);
			$player->getInventory()->remove($gb);
			$player->getArmorInventory()->setBoots($gb);
    	  }
		  
	}	
}
