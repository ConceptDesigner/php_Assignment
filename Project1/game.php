<?php
$guess = $message = "";
//Define function and parameters
function compare_integers($int1, $int2)
{
    if ($int1 < $int2) {
        return -1;
    } else if ($int1 == $int2) {
        return 0;
    } else {
        return 1;
    }
}
//Create php variable named random and set using if.. and statements
if (filter_has_var(INPUT_POST, "random")) {
    $random = filter_input(INPUT_POST, "random", FILTER_SANITIZE_NUMBER_INT);
} else {
    $random = rand(1, 20);
}

//check to see if guess is in range
if (filter_has_var(INPUT_POST, "guess")) {
    $guess = filter_input(INPUT_POST, "guess", FILTER_SANITIZE_NUMBER_INT);
    if ($guess >= 1 && $guess <= 20) {
        if (compare_integers($guess, $random) == -1) {
            $message = "Your guess $guess was too low.";
        }
        if (compare_integers($guess, $random) == 1) {
            $message = "Your guess $guess was too high.";
        }
        if (compare_integers($guess, $random) == 0) {
            $message = "Congratulations! You guessed the hidden number!!!";
        }
    } else {
        $message = "Invalid guess. Please enter a number between 1 and 20";
    }
}


?>


<?php
$title = "PHP Online Bookstore Home";
require('includes/header.php');

?>

    <!-- page specific content starts -->
    <h2>Guessing the Number</h2>
    <p>Enter a number between 1 and 20, then press the Guess button.</p>
    <form action="game.php" method="post">
        <p>
            <input type="number" name="guess" required/>&nbsp;&nbsp;
            <input type="submit" value=" Guess "/>
        </p>
        <!-- this hidden field is used to store the system generated random number -->
        <!--modify value to random variable-->
        <input type="hidden" name="random" value="<?php echo $random ?>"/>
    </form>
    <!-- page specific content ends -->

<?php echo $message ?>

<?php require('includes/footer.php'); ?>