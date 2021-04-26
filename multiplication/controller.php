<?php
	$max = 10;
?>
<form method="post">
<?php 
 for($i=1;$i<=$max;$i++){
     echo '<input type="checkbox" id='.$i.' name="'.$i.'"><label for="'.$i.'">'.$i.'</label>';
     if($i%10==0){
         echo "<br>";
     }
 }
 ?>
 
<br>
    <input type="submit" value="valider">
</form>

<?php
for($i = 0; $i <= $max; $i++){
    if(isset($_POST[$i]))//s'il existe
    if(!empty($_POST[$i])){//non null
        showTable($i);//afficher table
        echo "<br>";
    }
}



function ShowTable($x){
    for($i = 0; $i <= 10; $i++)
        echo $i." * ".$x." = ".($x*$i)."<br>";
}


?>