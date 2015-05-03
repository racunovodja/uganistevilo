<?php
 //Starts our php document
//if {!x}
 //if we have already defined x and started the game, this does not run
 {
 Echo "Please Choose a Number 1-100 <p>";
 //gives the user instructions
 $x = rand (1,100) ;
 //creates x
 }

 $x = 27;

if ($Num >$x): {
 Echo "Your number, $Num, is too high. Please try again<p>";}
 //if the number they guessed is bigger than x, it lets them know their guess was too high

 elseif ($Num == $x):
 {Echo "Congratulations you have won!<p>";
 //if the number they guessed was correct it lets them know they won
 Echo "To play again, please Choose a Number 1-100 <p>";
 $x = rand (1,100) ;
 //it then starts the game again by choosing a new value for $x that they can guess
 }

 else:
 {Echo "Your number, $Num, is too low. Please try again<p>";}
 //if the answer is neither correct or to high, it tells them it is too low
 
 ?> 

<form action="Uganistevilo.php" method="POST">
    <div class="form-group">
        <label for="Uganistevilo">Vnesi število:</label>
        <input type="integer" name="igralec">
    </div>
    <button type="submit" class="btn btn-default">Potrdi</button>
</form>

