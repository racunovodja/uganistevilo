

<?php
    function meter_v_kilometer($vrednost)
    {
        $meter=($vrednost/1000);
        return $meter;
    }

    function kilometer_v_meter($vrednost)
    {
        $kilometer=($vrednost*1000);
        return $kilometer;
    }

?>

<html>
    <head>
        <title>Pretvornik</title>
    </head>
    <body>
        <form action="" method="post">
            <select name="prva_enota">
                <option value="kilometer">Kilometer</option>
                <option value="meter">Meter</option>
            </select>
            <input type="text" name="vrednost">
            <select name="druga_enota">
                <option value="kilometer">Kilometer</option>
                <option value="meter">Meter</option>
            </select>
            <input type="submit" name="btn" value="Pretvori">
              
<?php
if(isset($_POST["btn"])) {
    $prva_enota=$_POST["prva_enota"];
    $druga_enota=$_POST["druga_enota"];
    $vrednost=$_POST["vrednost"];
        if($prva_enota=="kilometer") {
            $meter=kilometer_v_meter($vrednost);
            echo "Kilometer $vrednost = $meter metrov";
            }
        if($prva_enota=="meter") {
            $kilometer=meter_v_kilometer($vrednost);
            echo "$vrednost metrov = $kilometer kilometrov";
            }
}
                   
?>
              
        </form>
    </body>
</html> 