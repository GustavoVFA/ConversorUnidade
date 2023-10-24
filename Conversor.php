<?php

class Conversor
{

    private $valorFinal;

    function setValorFinal($valorFinal)
    {
        $this->valorFinal = $valorFinal;
    }

    function getValorFinal()
    {
        return $this->valorFinal;
    }

    function ConverterMetros($medida1, $medida2, $valorInicial)
    {

        switch ($medida2) {
            case 'metro':
                $this->valorFinal = $valorInicial;
                break;
            case 'quilometro':
                $this->valorFinal = $valorInicial / 1000;
                break;
            case 'centimetro':
                $this->valorFinal = $valorInicial * 100;
                break;
            case 'milimetro':
                $this->valorFinal = $valorInicial * 1000;
                break;
            default:
                break;
        }
        return $this->valorFinal;
    }

    function ConverterCentimetros($medida1, $medida2, $valorInicial)
    {

        switch ($medida2) {
            case 'centimetro':
                $this->valorFinal = $valorInicial;
                break;
            case 'metro':
                $this->valorFinal = $valorInicial / 100;
                break;
            case 'quilometro':
                $this->valorFinal = $valorInicial / 100000;
                break;
            case 'milimetro':
                $this->valorFinal = $valorInicial * 10;
                break;
            default:
                break;
        }

        return $this->valorFinal;
    }

    function ConverterQuilometros($medida1, $medida2, $valorInicial)
    {

        switch ($medida2) {
            case 'quilometros':
                $this->valorFinal = $valorInicial;
                break;
            case 'metro':
                $this->valorFinal = $valorInicial * 100;
                break;
            case 'centimetro':
                $this->valorFinal = $valorInicial * 100000;
                break;
            case 'milimetro':
                $this->valorFinal = $valorInicial * 1000000;
                break;
            default:
                break;
        }

        return $this->valorFinal;
    }

    function ConverterMilimetros($medida1, $medida2, $valorInicial)
    {

        switch ($medida2) {
            case 'quilometros':
                $this->valorFinal = $valorInicial / 1000000;
                break;
            case 'metro':
                $this->valorFinal = $valorInicial / 1000;
                break;
            case 'centimetro':
                $this->valorFinal = $valorInicial / 10;
                break;
            default:
                break;
            }

    }
}
