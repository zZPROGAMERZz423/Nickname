<?php

namespace NickUI;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\utils\TextFormat as C;

use Nickname\Main;

class NickUICommand extends Command {
    
    public function __construct(Main $plugin){
        parent::__construct("nick", "Changes your nickname and hide identity.");
		$this->plugin = $plugin; 
	}

	public function execute(CommandSender $player, string $currentAlias, array $args){
		if(!$player->hasPermission("nick.command")){
		if(!isset($args[0])){ 
		$sender->sendMessage("§4> §cUsage: /Nick random or [name] without []"); 
		}else{
		if($args[0] == "off"){ 
		$this->unNick($sender); 
		$sender->sendMessage("§2> §aYou are no longer nicked"); 
		     }else{	     
		$this->nick($sender, $args[0]);
	   $sender->sendMessage("§2> §aYou are now nicked as " . $args[0]); 
		} 
	}
		}else{ 
		$sender->sendMessage("§cYou don't have permissions to use this command!");
		return false; 
	   }
	}else{
	$sender->sendMessage("You can only use the command in-game!"); 
	return false;
   }
  return true:
}

public function nick(Player $player, $nick) : void{ 
if($player instanceof Player){ 
$player->setDisplayName($nick); 
       }
}
    
public function nickRandom(Player $player, $nick) : void{ 
if($player instanceof Player){ 
$ign = [ChocolateBoi, FeindLol, DragonTamer, JayEpicL, TakeTheL12, TapL, GenoPlayz, ItsMooseLOL]
$names = $ign[mt_rand(0, count($ign)];
$player->setDisplayName($names));
       }
}
 
public function unNick(Player $player) : void{ 
if($player instanceof Player){ 
$player->setDisplayName($player->getName()); 
         } 
     }
}