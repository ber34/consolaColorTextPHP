<?php
 // "N":"B":"U":
 // BLACK Color Text 
 // RED Color Text 
 // GREEN Color Text
 // YELLOW Color Text
 // BLUE Color Text
 // Magenta Color Text
 // CYAN Color Text
 // WHITE Color Text
 require_once 'src/ClassApp/ColorTextConsole.php';

 use ConsoleColorPhp\ClassApp\ColorTextConsole;

$colorTextConsole = new ColorTextConsole("GREEN","0","0","0","N","N","color test console: GREEN");
echo $colorTextConsole->textStringTo()."\n";
$colorTextConsole = new ColorTextConsole("MAGENTA","0","0","0","N","N","color and backgrund test console: MAGENTA ");
echo $colorTextConsole->textStringTo()."\n";
$colorTextConsole = new ColorTextConsole("YELLOW","0","0","0","N","N","color test console: YELLOW");
echo $colorTextConsole->textStringTo()."\n";
$colorTextConsole = new ColorTextConsole("BLUE","0","0","0","N","N","color test console: BLUE");
echo $colorTextConsole->textStringTo()."\n";
$colorTextConsole = new ColorTextConsole("CYAN","0","0","0","N","N","color test console: CYAN");
echo $colorTextConsole->textStringTo()."\n";
$colorTextConsole = new ColorTextConsole("GREEN","0","0","0","B","N","color and backgrund test console: GREEN and Charakter BOLD");
echo $colorTextConsole->textStringTo()."\n";
$colorTextConsole = new ColorTextConsole("GREEN","0","WHITE","0","B","N","color and backgrund test console: GREEN and WHITE");
echo $colorTextConsole->textStringTo()."\n";
