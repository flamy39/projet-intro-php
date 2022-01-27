<?php

const TOUTES_LES_PROMOTIONS = "TOUTES";

$correspondances = [
    "SIO1" => "BTS SIO1",
    "SIO2" => "BTS SIO2",
    "TC1" => "BTS TC1",
    "TC2" => "BTS TC2"
];

function findCorrespondance(string $parametreURL) : string {
    global $correspondances;
    if (array_key_exists($parametreURL,$correspondances)) {
        return $correspondances[$parametreURL];
    } else {
        return TOUTES_LES_PROMOTIONS;
    }
}