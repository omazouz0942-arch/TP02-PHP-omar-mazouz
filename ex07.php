<?php
$nbr=7;
?>
<h2>1.table de multiplicaion de<?= $nbr ?> </h2>
<?php
for($i=1;$i<=10;$i++){
    echo $nbr ." x ".$i." = ".($nbr*$i);
    echo "<br>";
}
?>