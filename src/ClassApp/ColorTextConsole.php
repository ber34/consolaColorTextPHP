<?php

 namespace ConsoleColorPhp\ClassApp;


class ColorTextConsole {

    public string $upColor, $outColor, $text, $typeUpColor, $typeOutColor, $upBackgrund, $outBackgrund, $typeUpBackgrund, $typeOutBackgrund, $typeUpCharakter, $typeOutCharakter; 

    public function __construct($upColor, $outColor, $upBackgrund = "0", $outBackgrund = "0", $upCharakter ="N", $outCharakter ="0", $text){
        $this->upColor       = $upColor;
        $this->outColor      = $outColor;
        $this->upBackgrund   = $upBackgrund;
        $this->outBackgrund  = $outBackgrund;
        $this->upCharakter   = $upCharakter;
        $this->outCharakter  = $outCharakter;
        $this->text          = $text;
    }

    private function textColor(){

        switch($this->upColor){
            case "BLACK":
                $this->typeUpColor = ";30";
            break;
            case "RED":
                $this->typeUpColor = ";31";
            break;
            case "GREEN":
                $this->typeUpColor = ";32";
            break;
            case "YELLOW":
                $this->typeUpColor = ";33";
            break;
            case "BLUE":
                $this->typeUpColor = ";34";
            break;
            case "MAGENTA":
                $this->typeUpColor = ";35";
            break;
            case "CYAN":
                $this->typeUpColor = ";36";
            break;
            case "WHITE":
                $this->typeUpColor = ";37";
            break;
            default:
            $this->typeUpColor = ";37";

        }

        switch($this->outColor){
            case "BLACK":
                $this->typeOutColor = ";30";
            break;
            case "RED":
                $this->typeOutColor = ";31";
            break;
            case "GREEN":
                $this->typeOutColor = ";32";
            break;
            case "YELLOW":
                $this->typeOutColor = ";33";
            break;
            case "BLUE":
                $this->typeOutColor = ";34";
            break;
            case "MAGENTA":
                $this->typeOutColor = ";35";
            break;
            case "CYAN":
                $this->typeOutColor = ";36";
            break;
            case "WHITE":
                $this->typeOutColor = ";37";
            break;
            case "0":
                $this->typeOutColor = "0";
            break;
            default:
            $this->typeOutColor = "0";
        }
    }

    private function textCharakter(){
        switch($this->upCharakter){
            case "N":
                $this->typeUpCharakter = "0";
            break;
            case "B":
                $this->typeUpCharakter = "1";
            break;
            case "U":
                $this->typeUpCharakter = "4";
            break;
            case "0":
                $this->typeUpCharakter = "0";
            break;
            default:
                $this->typeUpCharakter = "0";
        }

        switch($this->outCharakter){
            case "N":
                $this->typeOutCharakter = "0";
            break;
            case "B":
                $this->typeOutCharakter = "1";
            break;
            case "U":
                $this->typeOutCharakter = "4";
            break;
            case "0":
                $this->typeOutCharakter = "0";
            break;
            default:
            $this->typeOutCharakter = "0";
        }
    }

    private function textBackgrund(){

        switch($this->upBackgrund){
            case "BLACK":
                $this->typeUpBackgrund = ";40";
            break;
            case "RED":
                $this->typeUpBackgrund = ";41";
            break;
            case "GREEN":
                $this->typeUpBackgrund = ";42";
            break;
            case "YELLOW":
                $this->typeUpBackgrund = ";43";
            break;
            case "BLUE":
                $this->typeUpBackgrund = ";44";
            break;
            case "MAGENTA":
                $this->typeUpBackgrund = ";45";
            break;
            case "CYAN":
                $this->typeUpBackgrund = ";46";
            break;
            case "WHITE":
                $this->typeUpBackgrund = ";47";
            break;
            case "0":
                $this->typeUpBackgrund = "";
            break;
            default:
                $this->typeUpBackgrund = "";
        }

        switch($this->outBackgrund){
            case "BLACK":
                $this->typeOutBackgrund = ";40";
            break;
            case "RED":
                $this->typeOutBackgrund = ";41";
            break;
            case "GREEN":
                $this->typeOutBackgrund = ";42";
            break;
            case "YELLOW":
                $this->typeOutBackgrund = ";43";
            break;
            case "BLUE":
                $this->typeOutBackgrund = ";44";
            break;
            case "MAGENTA":
                $this->typeOutBackgrund = ";45";
            break;
            case "CYAN":
                $this->typeOutBackgrund = ";46";
            break;
            case "WHITE":
                $this->typeOutBackgrund = ";47";
            break;
            case "0":
                $this->typeOutBackgrund = "0";
            break;
            default:
            $this->typeOutBackgrund = "0";
        }
    }

    public function textStringTo(){
        $this->textCharakter();
        $this->textColor();
        $this->textBackgrund();
        return "\e[".$this->typeUpCharakter.$this->typeUpColor.$this->typeUpBackgrund."m".$this->text."\e[".$this->typeOutCharakter.$this->typeOutColor.$this->typeOutBackgrund."m";
    }
}
