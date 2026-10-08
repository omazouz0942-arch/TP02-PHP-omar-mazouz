<?php
$moyenne=9;
if($moyenne<0||$moyenne>20)
echo"note invalide";
elseif($moyenne<10) 
    echo "non valide";
elseif($moyenne<12)
    echo"passable";
elseif($moyenne<14)
echo "assez bien ";
else
    echo "tres bien ";
