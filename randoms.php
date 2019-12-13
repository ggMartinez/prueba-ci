<?php require __DIR__ .  "/Templates/Header.php"; ?>

<?php
    require __DIR__ . "/Classes/RandomNumber.php";

    for($a=0;$a<10;$a++){
        $num = new RandomNumber;
        
        echo $num->Generate() . "<br>";
    }
?>



<?php require __DIR__ . "/Templates/Footer.php"; ?>
