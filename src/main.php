<?php
/*
    Nmap API Script using system's nmap.
*/

class Nmap {
    public $ip;

    function __construct($i) {
        $this->ip = i;
    }

    public function start_scan() {
        $output = ""; $bs = ""; $new = "";
        exec("nmap $ip", $output, $bs);
        foreach($output as $line) {
            if(strpos($line, "close") !== false || strpos($line, "open") !== false || strpos($line, "filter") !== false) {
                $new += $line;
            }
        }
        return $new;
    }

}