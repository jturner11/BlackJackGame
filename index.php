
<?php

/**
 * This creates the deck
 *
 * @return array
 */
function createDeck() {
    $deck = [2,3,4,5,6,7,8,9,10,"jack" => 10, "queen" => 10, "king" => 10, "ace" => 11];
    return $deck;
}

/**
 * this deals the card
 *
 * @param $deck
 *
 * @return mixed
 */
function dealCard($deck) {
    $card1 = $deck[array_rand($deck)];
    return $card1;
}

/**
 * this is how how many Cards are dealt calculation
 *
 * @param $card1
 * @param $card3
 * @param $card5
 *
 * @return mixed
 */
function cardCalc($card1, $card3, $card5) {
    $score1 = $card1 + $card3 + $card5;
    return $score1;
}

/**
 * This calculates the winner
 *
 * @param $score1
 * @param $score2
 */
function calculateWinner($score1, $score2) {
    if ($score1 > 21) {
       echo "Bust, player 2 wins";
    } else if ($score2 > 21) {
       echo "You win, player 2 bust";
    } else if ($score1 > $score2) {
        echo "You're a winner";
    } else {
        echo "You loose";
    }
}

/**
 *This is how its executed
 */
function playGame() {
    $deck = createDeck();
    $card1 = dealCard($deck);
    $card2 = dealCard($deck);
    $card3 = dealCard($deck);
    $card4 = dealCard($deck);
    $card5 = dealCard($deck);
    $card6 = dealCard($deck);
    $score1 = cardCalc($card1, $card3, $card5);
    $score2 = cardCalc($card2, $card4, $card6);
    calculateWinner($score1, $score2);
}
playGame();
