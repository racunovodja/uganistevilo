

<?php

$session_id = session_id();

if (empty($session_id))
    session_start();

if (isset($_POST['guess']))
{
    if ($_POST['guess'] == $_SESSION['number'])
    {
        echo "You Win! :)";
        unset($_SESSION['number']);
    }
    else
    {
        $_SESSION['tries']++;
        
        if ($_SESSION['tries'] < 3)
        {
            echo "Try #{$_SESSION['tries']}<br /><br />";
        }
        else
        {
            echo "Try #3 : You Lose :(";
            unset($_SESSION['number']);
        }
    }
}

if (empty($_SESSION['number']))
{
    $_SESSION['tries'] = 0;
    $_SESSION['number'] = rand(1, 10);
}

?>

<html>
    <head>
        <title>Guessing Game</title>
    </head>
    
    <body>
        <form method="post" action="">
            <label for="guess">Guess</label>
            <select name="guess" id="guess">
                <?php
                
                for ($i = 1; $i < 11; $i++)
                {
                    echo "<option value='{$i}'>{$i}</option>";
                }
                
                ?>
            </select>
            <input type="submit" value="Guess" />
        </form>
    </body>
</html>