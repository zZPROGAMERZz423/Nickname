<?php

# [Plugin] by zZPROGAMERZz423
/**
 * Copyright 2018 zZPROGAMERZz423
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Nickname;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\utils\TextFormat as C;

use Nickname\Main;

class NickCommand extends Command{

    public function __construct(Main $plugin){
    
        parent::__construct($plugin, "nick", "changes your nickname);
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
