<?php

namespace Haiven\GuessNumber\Controller;

use Haiven\GuessNumber\View;
use Haiven\GuessNumber\Game;

function startGame($maxNumber, $maxAttempts, $saveToDatabase = false) {
	if ($saveToDatabase) {
        \cli\line("Пока что базы данных не работают.");
    }
    $game = new Game($maxNumber, $maxAttempts);
    $game->play();
}
