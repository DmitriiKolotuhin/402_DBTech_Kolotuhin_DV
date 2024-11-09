<?php

namespace Haiven\GuessNumber;

use Haiven\GuessNumber\View;
use Haiven\GuessNumber\Game;

class Controller
{
    public static function startGame($maxNumber, $maxAttempts, $saveToDatabase = false, $dbPath = null, $playerName = 'Player')
    {
        if ($saveToDatabase) {
            $db = new Database($dbPath);
        }

        $game = new Game($maxNumber, $maxAttempts, $playerName);
        $game->play();

        if ($saveToDatabase) {
            $db->saveGame($game);
        }
    }
}
