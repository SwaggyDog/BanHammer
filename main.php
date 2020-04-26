<?php

declare(strict_types=1);

namespace SwaggyDog\BanHammer;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\utils\TextFormat;

use pocketmine\utils\TextFormat;

use pocketmine\item\Item;

use pocketmine\nbt\tag\StringTag;

use pocketmine\event\player\PlayerInteractEvent;



class Main extends PluginBase implements Listener {
    
    public function onEnable () {
        $this->getServer()->registerEvents($this, $this);
    }
    
    public function onCommand (CommandSender $sender, Command $cmd, string $label, array $args) : bool {
    
    switch ($cmd->getName() ) {
        case "test";
            if ($sender instanceof Player) {
            // real player
            $sender->sendMessage(TextFormat : :YELLOW . "Hello " . $sender->getName());
            } else {
                // command send from Console
        break;
    }   
    return true;
    }



    public function onJoin(PlayerJoinEvent $event) {
    $player = $event->getPlayer();
    
    $player->sendMessage(TextFormat: :AQUA . "Hello" . getName());
}