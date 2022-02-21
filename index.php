<?php
/*
        Godly Nmap Scanner using your system's NMAP package.
        Don't forget to make sure you have NMAP Installed
*/
include("src/main.php");

$q = $_GET['q'] ? $_GET['q'] : $argv[1]; // &q=
$ip = $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER['REMOTE_ADDR'];

echo "[+] Port Scanner By err404";

$nmap = new Nmap($q);
echo $nmap->start_scan();
