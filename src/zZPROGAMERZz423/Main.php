<?php

namespace zZPROGAMERZz423\Nickname;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use Nickname\NickCommand;


class Main extends PluginBase implements Listener { 

public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getCommandMap()->register("nick", new NickCommand($this));
		$this->getLogger()->info("Nickname has been successfully enabled by the server");
		}
		
public function onDisable(){
        $this->getLogger()->notice("Nickname has been disabled by the server");
        }
}
		
		
