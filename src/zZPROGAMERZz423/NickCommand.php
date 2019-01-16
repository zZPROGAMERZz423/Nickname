<?php

namespace zZPROGAMERZz423\Nickname;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as C;
use Nickname\Main;

class NickCommand extends Command{
    public function __construct(Main $plugin){
    
        parent::__construct("nick", "changes your nickname);
	    $this->plugin = $plugin;
    }
    
    public function execute(CommandSender $sender, $commandLabel, array $args) : bool{
        if($sender instanceof Player){
            if($sender->hasPermission("nickname.command){
                if(!isset($args[0])){
                    $sender->sendMessage("§cUsage: /nick off or [name] without []");
                }else{
                    if($args[0] == "disable"){
                        $this->noNick($sender);
                        $sender->sendMessage("§aYou are no longer nicked!");
                    }else{
                        $this->onNick($sender, $args[0]);
                        $sender->sendMessage("§aYou are now nicked as the name " . $args[0]);
                    }
                }
            }else{
                $sender->sendMessage("§cYou don't have permissions to use thr command /nick");
                return false;
        }
        return true;
    }
    public function onNick(Player $player, $nick) : void{
        if($player instanceof Player){
            $player->setDisplayName($nick);
            $player->sendMessage("§eTo unnick do /nick disable");
        }
    }
    public function noNick(Player $player) : void{
        if($player instanceof Player){
            $player->setDisplayName($player->getName());
        }
    }
}
