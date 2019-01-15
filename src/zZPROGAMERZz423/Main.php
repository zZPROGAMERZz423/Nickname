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
		$this->getLogger()->notice("Nickname has been successfully enabled by the server");
		}
		
public function onDisable(){
        $this->getLogger()->notice("Nickname has been disabled by the server");
        }
}
		
		
