<?php

declare(strict_types=1);

namespace laith98\AutoArmor;

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
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		}

	/*
			OnTap To Get Armor 
			Copyright 2019 LaithYoutuber
	*/
	public function Tap(PlayerItemHeldEvent $event){
    	  $item = $event->getItem();
	  $player = $event->getPlayer();
		$in = $player->getInventory()->getItemInHand()->getId();
    	  if($in === 310){
			$dh = Item::get(310, 0, 1);
			$player->getInventory()->remove($dh);
			$player->getArmorInventory()->setHelmet($dh);
			}
		  if($in === 311){
    	  	$dc = Item::get(311, 0, 1);
			$player->getInventory()->remove($dc);
			$player->getArmorInventory()->setChestplate($dc);
    	  }
		  if($in === 312){
    	  	$dl = Item::get(312, 0, 1);
			$player->getInventory()->remove($dl);
			$player->getArmorInventory()->setLeggings($dl);
    	  }
		  if($in === 313){
    	  	$db = Item::get(313, 0, 1);
			$player->getInventory()->remove($db);
			$player->getArmorInventory()->setBoots($db);
    	  }
		  if($in === 298){
    	  	$lc = Item::get(298, 0, 1);
			$player->getInventory()->remove($lc);
			$player->getArmorInventory()->setHelmet($lc);
    	  }
		  if($in === 299){
    	  	$lt = Item::get(299, 0, 1);
			$player->getInventory()->remove($lt);
			$player->getArmorInventory()->setChestplate($lt);
    	  }
		  if($in === 300){
    	  	$lp = Item::get(300, 0, 1);
			$player->getInventory()->remove($lp);
			$player->getArmorInventory()->setLeggings($lp);
    	  }
		   if($in === 301){
    	  	$lb = Item::get(301, 0, 1);
			$player->getInventory()->remove($lb);
			$player->getArmorInventory()->setBoots($lb);
    	  }
		  if($in === 302){
    	  	$ch = Item::get(302, 0, 1);
			$player->getInventory()->remove($ch);
			$player->getArmorInventory()->setHelmet($ch);
    	  }
		  if($in === 303){
    	  	$cc = Item::get(303, 0, 1);
			$player->getInventory()->remove($cc);
			$player->getArmorInventory()->setChestplate($cc);
    	  }
		  if($in === 304){
    	  	$cl = Item::get(304, 0, 1);
			$player->getInventory()->remove($cl);
			$player->getArmorInventory()->setLeggings($cl);
    	  }
		  if($in === 305){
    	  	$cb = Item::get(305, 0, 1);
			$player->getInventory()->remove($cb);
			$player->getArmorInventory()->setBoots($cb);
    	  }
		  if($in === 306){
    	  	$ih = Item::get(306, 0, 1);
			$player->getInventory()->remove($ih);
			$player->getArmorInventory()->setHelmet($ih);
    	  }
		  if($in === 307){
    	  	$ic = Item::get(307, 0, 1);
			$player->getInventory()->remove($ic);
			$player->getArmorInventory()->setChestplate($ic);
    	  }
		  if($in === 308){
    	  	$il = Item::get(308, 0, 1);
			$player->getInventory()->remove($il);
			$player->getArmorInventory()->setLeggings($il);
    	  }
		  if($in === 309){
    	  	$ib = Item::get(309, 0, 1);
			$player->getInventory()->remove($ib);
			$player->getArmorInventory()->setBoots($ib);
    	  }
		  if($in === 314){
    	  	$gh = Item::get(314, 0, 1);
			$player->getInventory()->remove($gh);
			$player->getArmorInventory()->setHelmet($gh);
    	  }
		  if($in === 315){
    	  	$gc = Item::get(315, 0, 1);
			$player->getInventory()->remove($gc);
			$player->getArmorInventory()->setChestplate($gc);
    	  }
		  if($in === 316){
    	  	$gl = Item::get(316, 0, 1);
			$player->getInventory()->remove($gl);
			$player->getArmorInventory()->setLeggings($gl);
    	  }
		  if($in === 317){
    	  	$gb = Item::get(317, 0, 1);
			$player->getInventory()->remove($gb);
			$player->getArmorInventory()->setBoots($gb);
    	  }
		  
	}
}
