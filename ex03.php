<?php

define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;

$totalTTC += 15;

echo "<h2>Récapitulatif de la commande</h2>";
echo "<p>Prix unitaire HT : $prixUnitaireHT " . DEVISE . "</p>";
echo "<p>Quantité : $quantite</p>";
echo "<p>Total HT : $totalHT " . DEVISE . "</p>";
echo "<p>TVA (" . TAUX_TVA . " %) : $montantTVA " . DEVISE . "</p>";
echo "<p>Total TTC : " . ($totalHT + $montantTVA) . " " . DEVISE . "</p>";
echo "<p>Frais de livraison : 15 " . DEVISE . "</p>";
echo "<p><strong>Montant final : $totalTTC " . DEVISE . "</strong></p>";

if (defined("TAUX_TVA")) {
    echo "<p>La constante TAUX_TVA est bien définie.</p>";
}

?>