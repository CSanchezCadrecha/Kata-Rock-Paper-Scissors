<?php

namespace App;

class Game {
    
    public function start($player1,$player2) : string
    {
        if($player1->getFigure()->getType() =="Rock" && 
        $player2->getfigure()->getType() == "Sicssors") 
        {
            return "Player1 win";

        }

    }
}