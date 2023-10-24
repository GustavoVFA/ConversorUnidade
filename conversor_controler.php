<?php 

include 'Conversor.php';

$medida1 = $_POST['medida1'];
$medida2 = $_POST['medida2'];
$valorInicial = $_POST['valorInicial'];

$conversor = new Conversor();


switch ($medida1) {
    case 'metro':
        $valorFinal = $conversor->ConverterMetros($medida1, $medida2, $valorInicial);
        break;
    case 'centimetro':
        $valorFinal = $conversor->ConverterCentimetros($medida1, $medida2, $valorInicial);
        break;
    case 'quilometro':
        $valorFinal = $conversor->ConverterQuilometros($medida1, $medida2, $valorInicial);
        break;
    case 'milimetro':
        $valorFinal = $conversor->ConverterMilimetros($medida1, $medida2, $valorInicial);
        break;
    default:
        $valorFinal = "Valor Inválido!";
        break;
}


$conversor->setValorFinal($valorFinal);
$valor = $conversor->getValorFinal();

?>