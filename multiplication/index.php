<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>oe oe oe</title>
	</head>
    <body>
        <form method="post">
            <select name="choix">
                <option value="none">Choisis ta table de multiplication</option>
                <option value="choix1">Table de 1</option>
                <option value="choix2">Table de 2</option>
                <option value="choix3">Table de 3</option>
                <option value="choix4">Table de 4</option>
                <option value="choix5">Table de 5</option>
                <option value="choix6">Table de 6</option>
                <option value="choix7">Table de 7</option>
                <option value="choix8">Table de 8</option>
                <option value="choix9">Table de 9</option>
                <option value="choix10">Table de 10</option>
                <input type="submit" value="envoyer">
            </select>
        </form> 
       
        <form method="post" action="controller.php">
            <input type="checkbox" name="coche" value="coche1">
            <input type="checkbox" name="coche" value="coche2">
            <input type="checkbox" name="coche" value="coche3">
            <input type="checkbox" name="coche" value="coche4">
            <input type="checkbox" name="coche" value="coche5">
            <input type="checkbox" name="coche" value="coche6">
            <input type="checkbox" name="coche" value="coche7">
            <input type="checkbox" name="coche" value="coche8">
            <input type="checkbox" name="coche" value="coche9">
            <input type="checkbox" name="coche" value="coche10">
            <input type="submit" value="envoyer">
        </form> 
    </body>
</html>


<?php 

$table1 = 1;
$table2 = 2;
$table3 = 3;
$table4 = 4;
$table5 = 5;
$table6 = 6;
$table7 = 7;
$table8 = 8;
$table9 = 9;
$table10 = 10;


if(isset($_POST['choix'])){
    
    if($_POST['choix']=="choix1"){
        for ($i=0; $i<=10; $i++){
            echo $table1 . ' x ' .  $i . ' = ' . ($i * $table1) . '<br>';
        }
    
    }elseif($_POST['choix']=="choix2"){
        for ($i=0; $i<=10; $i++){
            echo $table2 . ' x ' .  $i . ' = ' . ($i * $table2) . '<br>';
        }
    
    }elseif($_POST['choix']=="choix3"){
        for ($i=0; $i<=10; $i++){
            echo $table3 . ' x ' .  $i . ' = ' . ($i * $table3) . '<br>';
        }

    }elseif($_POST['choix']=="choix4"){
        for ($i=0; $i<=10; $i++){
            echo $table4 . ' x ' .  $i . ' = ' . ($i * $table4) . '<br>';
        }
    }elseif($_POST['choix']=="choix5"){
        for ($i=0; $i<=10; $i++){
            echo $table5 . ' x ' .  $i . ' = ' . ($i * $table5) . '<br>';
        }

    }elseif($_POST['choix']=="choix6"){
        for ($i=0; $i<=10; $i++){
            echo $table6 . ' x ' .  $i . ' = ' . ($i * $table6) . '<br>';
        }

    }elseif($_POST['choix']=="choix7"){
        for ($i=0; $i<=10; $i++){
            echo $table7 . ' x ' .  $i . ' = ' . ($i * $table7) . '<br>';
        }

    }elseif($_POST['choix']=="choix8"){
        for ($i=0; $i<=10; $i++){
            echo $table8 . ' x ' .  $i . ' = ' . ($i * $table8) . '<br>';
        }

    }elseif($_POST['choix']=="choix9"){
        for ($i=0; $i<=10; $i++){
            echo $table9 . ' x ' .  $i . ' = ' . ($i * $table9) . '<br>';
        }

    }elseif($_POST['choix']=="choix10"){
        for ($i=0; $i<=10; $i++){
            echo $table10 . ' x ' .  $i . ' = ' . ($i * $table10) . '<br>';
        }
    }
}

?>