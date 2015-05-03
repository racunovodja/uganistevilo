<h1> Guess My Number</h1>

<?php
if(isset($_POST[‘submit’])) {
$x = $_POST[‘x’];
$num = $_POST[‘num’];

if($num<$x)
{
echo ” Higher <br />”;
}
elseif($num==$x)
{
echo ” <b> You got it right! </b><br />”;
$x=rand(1,100);
echo ” Press go to start guessing again. <br />”;
}
else
{
echo ” Lower <br />”;
}
}else
{
$x=rand(1,100);

}

?>
<p>
<form action=”” method=”POST”>
Igralec: <input name=”num” value=”<?php echo $num; ?>”> <br />
<input type=”hidden” name=”x” value=”<?php echo $x; ?>”> <br />
<input name=”submit” type=”submit” value=”go”>
</form>
</p>