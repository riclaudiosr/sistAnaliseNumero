<?php

namespace App\adms\Models;

if (!defined('RSR1937NA')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}
// buscar os dados da tabela e executa os calculo e envia os resultados

class AdmsExeInfo
{
    // private $tots; // recebe a quantidade de registro da tabela
    private bool $result; //$result Recebe true quando executar o processo com sucesso e false quando houver erro 
    private array|null $resultBd; // $resultBd os valores do calculo da classe
    //private int|string|array|null $data;//$id Recebe o id do registro 
    function getResult(): bool
    {
        return $this->result;
    }
    function getResultBd(): array|null
    {
        return $this->resultBd;
    }
    public function exeInfoColuns(): void
    {
        $tables = new \App\adms\Models\AdmsInfoTables();
        $totTables = (int) $tables->totTables();
        $tables->colUm();
        $colUm = $tables->getResultBd();
        $colUm1 = [number_format($colUm['um1'] * 100 / $totTables, 2), '1'];
        $colUm2 = [number_format($colUm['um2'] * 100 / $totTables, 2), '2'];
        $colUm3 = [number_format($colUm['um3'] * 100 / $totTables, 2), '3'];
        $colUm4 = [number_format($colUm['um4'] * 100 / $totTables, 2), '4'];
        $colUm5 = [number_format($colUm['um5'] * 100 / $totTables, 2), '5'];
        $colUm6 = [number_format($colUm['um6'] * 100 / $totTables, 2), '6'];
        $colUm7 = [number_format($colUm['um7'] * 100 / $totTables, 2), '7'];
        $colUm8 = [number_format($colUm['um8'] * 100 / $totTables, 2), '8'];
        $colUm9 = [number_format($colUm['um9'] * 100 / $totTables, 2), '9'];
        $colUm10 = [number_format($colUm['um10'] * 100 / $totTables, 2), '10'];
        $colUm11 = [number_format($colUm['um11'] * 100 / $totTables, 2), '11'];
        $resultUm = [$colUm1, $colUm2, $colUm3, $colUm4, $colUm5, $colUm6, $colUm7, $colUm8, $colUm9, $colUm10, $colUm11];
        rsort($resultUm);
        $this->resultBd['um'] = $resultUm;
        

        $tables->colDois();
        $colDois = $tables->getResultBd();
        $colDois2 = [number_format($colDois['dois2'] * 100 / $totTables, 2), '2'];
        $colDois3 = [number_format($colDois['dois3'] * 100 / $totTables, 2), '3'];
        $colDois4 = [number_format($colDois['dois4'] * 100 / $totTables, 2), '4'];
        $colDois5 = [number_format($colDois['dois5'] * 100 / $totTables, 2), '5'];
        $colDois6 = [number_format($colDois['dois6'] * 100 / $totTables, 2), '6'];
        $colDois7 = [number_format($colDois['dois7'] * 100 / $totTables, 2), '7'];
        $colDois8 = [number_format($colDois['dois8'] * 100 / $totTables, 2), '8'];
        $colDois9 = [number_format($colDois['dois9'] * 100 / $totTables, 2), '9'];
        $colDois10 = [number_format($colDois['dois10'] * 100 / $totTables, 2), '10'];
        $colDois11 = [number_format($colDois['dois11'] * 100 / $totTables, 2), '11'];
        $colDois12 = [number_format($colDois['dois12'] * 100 / $totTables, 2), '12'];
        $resultDois = [$colDois2, $colDois3, $colDois4, $colDois5, $colDois6, $colDois7, $colDois8, $colDois9, $colDois10, $colDois11, $colDois12];
        rsort($resultDois);
        $this->resultBd['dois'] = $resultDois;

        $tables->colTres();
        $colTres = $tables->getResultBd();
        $colTres3 = [number_format($colTres['tres3'] * 100 / $totTables, 2), '3'];
        $colTres4 = [number_format($colTres['tres4'] * 100 / $totTables, 2), '4'];
        $colTres5 = [number_format($colTres['tres5'] * 100 / $totTables, 2), '5'];
        $colTres6 = [number_format($colTres['tres6'] * 100 / $totTables, 2), '6'];
        $colTres7 = [number_format($colTres['tres7'] * 100 / $totTables, 2), '7'];
        $colTres8 = [number_format($colTres['tres8'] * 100 / $totTables, 2), '8'];
        $colTres9 = [number_format($colTres['tres9'] * 100 / $totTables, 2), '9'];
        $colTres10 = [number_format($colTres['tres10'] * 100 / $totTables, 2), '10'];
        $colTres11 = [number_format($colTres['tres11'] * 100 / $totTables, 2), '11'];
        $colTres12 = [number_format($colTres['tres12'] * 100 / $totTables, 2), '12'];
        $colTres13 = [number_format($colTres['tres13'] * 100 / $totTables, 2), '13'];
        $resultTres = [$colTres3, $colTres4, $colTres5, $colTres6, $colTres7, $colTres8, $colTres9, $colTres10, $colTres11, $colTres12, $colTres13];
        rsort($resultTres);
        $this->resultBd['tres'] = $resultTres;

        $tables->colQuatro();
        $colTres = $tables->getResultBd();
        $colQuatro4 = [number_format($colTres['quatro4'] * 100 / $totTables, 2), '4'];
        $colQuatro5 = [number_format($colTres['quatro5'] * 100 / $totTables, 2), '5'];
        $colQuatro6 = [number_format($colTres['quatro6'] * 100 / $totTables, 2), '6'];
        $colQuatro7 = [number_format($colTres['quatro7'] * 100 / $totTables, 2), '7'];
        $colQuatro8 = [number_format($colTres['quatro8'] * 100 / $totTables, 2), '8'];
        $colQuatro9 = [number_format($colTres['quatro9'] * 100 / $totTables, 2), '9'];
        $colQuatro10 = [number_format($colTres['quatro10'] * 100 / $totTables, 2), '10'];
        $colQuatro11 = [number_format($colTres['quatro11'] * 100 / $totTables, 2), '11'];
        $colQuatro12 = [number_format($colTres['quatro12'] * 100 / $totTables, 2), '12'];
        $colQuatro13 = [number_format($colTres['quatro13'] * 100 / $totTables, 2), '13'];
        $colQuatro14 = [number_format($colTres['quatro14'] * 100 / $totTables, 2), '14'];
        $resultQuatro = [$colQuatro4, $colQuatro5, $colQuatro6, $colQuatro7, $colQuatro8, $colQuatro9, $colQuatro10, $colQuatro11, $colQuatro12, $colQuatro13, $colQuatro14];
        rsort($resultQuatro);
        $this->resultBd['quatro'] = $resultQuatro;

        $tables->colCinco();
        $colTres = $tables->getResultBd();
        $colCinco5 = [number_format($colTres['cinco5'] * 100 / $totTables, 2), '5'];
        $colCinco6 = [number_format($colTres['cinco6'] * 100 / $totTables, 2), '6'];
        $colCinco7 = [number_format($colTres['cinco7'] * 100 / $totTables, 2), '7'];
        $colCinco8 = [number_format($colTres['cinco8'] * 100 / $totTables, 2), '8'];
        $colCinco9 = [number_format($colTres['cinco9'] * 100 / $totTables, 2), '9'];
        $colCinco10 = [number_format($colTres['cinco10'] * 100 / $totTables, 2), '10'];
        $colCinco11 = [number_format($colTres['cinco11'] * 100 / $totTables, 2), '11'];
        $colCinco12 = [number_format($colTres['cinco12'] * 100 / $totTables, 2), '12'];
        $colCinco13 = [number_format($colTres['cinco13'] * 100 / $totTables, 2), '13'];
        $colCinco14 = [number_format($colTres['cinco14'] * 100 / $totTables, 2), '14'];
        $colCinco15 = [number_format($colTres['cinco15'] * 100 / $totTables, 2), '15'];
        $resultCinco = [$colCinco5, $colCinco6, $colCinco7, $colCinco8, $colCinco9, $colCinco10, $colCinco11, $colCinco12, $colCinco13, $colCinco14, $colCinco15];
        rsort($resultCinco);
        $this->resultBd['cinco'] = $resultCinco;

        $tables->colSeis();
        $colTres = $tables->getResultBd();
        $colSeis6 = [number_format($colTres['seis6'] * 100 / $totTables, 2), '6'];
        $colSeis7 = [number_format($colTres['seis7'] * 100 / $totTables, 2), '7'];
        $colSeis8 = [number_format($colTres['seis8'] * 100 / $totTables, 2), '8'];
        $colSeis9 = [number_format($colTres['seis9'] * 100 / $totTables, 2), '9'];
        $colSeis10 = [number_format($colTres['seis10'] * 100 / $totTables, 2), '10'];
        $colSeis11 = [number_format($colTres['seis11'] * 100 / $totTables, 2), '11'];
        $colSeis12 = [number_format($colTres['seis12'] * 100 / $totTables, 2), '12'];
        $colSeis13 = [number_format($colTres['seis13'] * 100 / $totTables, 2), '13'];
        $colSeis14 = [number_format($colTres['seis14'] * 100 / $totTables, 2), '14'];
        $colSeis15 = [number_format($colTres['seis15'] * 100 / $totTables, 2), '15'];
        $colSeis16 = [number_format($colTres['seis16'] * 100 / $totTables, 2), '16'];
        $resultSeis = [$colSeis6, $colSeis7, $colSeis8, $colSeis9, $colSeis10, $colSeis11, $colSeis12, $colSeis13, $colSeis14, $colSeis15, $colSeis16];
        rsort($resultSeis);
        
        $this->resultBd['seis'] = $resultSeis;

        $tables->colSete();
        $colTres = $tables->getResultBd();
        $colSete7 = [number_format($colTres['sete7']*100 / $totTables, 2), '7'];
        $colSete8 = [number_format($colTres['sete8']*100 / $totTables, 2), '8'];
        $colSete9 = [number_format($colTres['sete9']*100 / $totTables, 2), '9'];
        $colSete10 = [number_format($colTres['sete10']*100 / $totTables, 2), '10'];
        $colSete11 = [number_format($colTres['sete11']*100 / $totTables, 2), '11'];
        $colSete12 = [number_format($colTres['sete12']*100 / $totTables, 2), '12'];
        $colSete13 = [number_format($colTres['sete13']*100 / $totTables, 2), '13'];
        $colSete14 = [number_format($colTres['sete14']*100 / $totTables, 2), '14'];
        $colSete15 = [number_format($colTres['sete15']*100 / $totTables, 2), '15'];
        $colSete16 = [number_format($colTres['sete16']*100 / $totTables, 2), '16'];
        $colSete17 = [number_format($colTres['sete17']*100 / $totTables, 2), '17'];
        $resultSete = [$colSete7,$colSete8,$colSete9,$colSete10,$colSete11,$colSete12,$colSete13,$colSete14,$colSete15,$colSete16,$colSete17];
        rsort($resultSete);
        $this->resultBd['sete'] =$resultSete;

        $tables->colOite();
        $colTres = $tables->getResultBd();
        $colOite8 = [number_format($colTres['oite8']*100 / $totTables, 2), '8'];
        $colOite9 = [number_format($colTres['oite9']*100 / $totTables, 2), '9'];
        $colOite10 = [number_format($colTres['oite10']*100 / $totTables, 2), '10'];
        $colOite11 = [number_format($colTres['oite11']*100 / $totTables, 2), '11'];
        $colOite12 = [number_format($colTres['oite12']*100 / $totTables, 2), '12'];
        $colOite13 = [number_format($colTres['oite13']*100 / $totTables, 2), '13'];
        $colOite14 = [number_format($colTres['oite14']*100 / $totTables, 2), '14'];
        $colOite15 = [number_format($colTres['oite15']*100 / $totTables, 2), '15'];
        $colOite16 = [number_format($colTres['oite16']*100 / $totTables, 2), '16'];
        $colOite17 = [number_format($colTres['oite17']*100 / $totTables, 2), '17'];
        $colOite18 = [number_format($colTres['oite18']*100 / $totTables, 2), '18'];
        $resultOite = [$colOite8,$colOite9,$colOite10,$colOite11,$colOite12,$colOite13,$colOite14,$colOite15,$colOite16,$colOite17,$colOite18];
        rsort($resultOite);
        $this->resultBd['oite'] = $resultOite;

        $tables->colNove();
        $colTres = $tables->getResultBd();
        $colNove9 = [number_format($colTres['nove9']*100 / $totTables, 2), '9'];
        $colNove10 = [number_format($colTres['nove10']*100 / $totTables, 2), '10'];
        $colNove11 = [number_format($colTres['nove11']*100 / $totTables, 2), '11'];
        $colNove12 = [number_format($colTres['nove12']*100 / $totTables, 2), '12'];
        $colNove13 = [number_format($colTres['nove13']*100 / $totTables, 2), '13'];
        $colNove14 = [number_format($colTres['nove14']*100 / $totTables, 2), '14'];
        $colNove15 = [number_format($colTres['nove15']*100 / $totTables, 2), '15'];
        $colNove16 = [number_format($colTres['nove16']*100 / $totTables, 2), '16'];
        $colNove17 = [number_format($colTres['nove17']*100 / $totTables, 2), '17'];
        $colNove18 = [number_format($colTres['nove18']*100 / $totTables, 2), '18'];
        $colNove19 = [number_format($colTres['nove19']*100 / $totTables, 2), '19'];
        $resultNove =[$colNove9,$colNove10,$colNove11,$colNove12,$colNove13,$colNove14,$colNove15,$colNove16,$colNove17,$colNove18,$colNove19];
        rsort($resultNove);
        $this->resultBd['nove'] =$resultNove;

        $tables->colDez();
        $colTres = $tables->getResultBd();
        $colDez10 = [number_format($colTres['dez10']*100 / $totTables, 2), '10'];
        $colDez11 = [number_format($colTres['dez11']*100 / $totTables, 2), '11'];
        $colDez12 = [number_format($colTres['dez12']*100 / $totTables, 2), '12'];
        $colDez13 = [number_format($colTres['dez13']*100 / $totTables, 2), '13'];
        $colDez14 = [number_format($colTres['dez14']*100 / $totTables, 2), '14'];
        $colDez15 = [number_format($colTres['dez15']*100 / $totTables, 2), '15'];
        $colDez16 = [number_format($colTres['dez16']*100 / $totTables, 2), '16'];
        $colDez17 = [number_format($colTres['dez17']*100 / $totTables, 2), '17'];
        $colDez18 = [number_format($colTres['dez18']*100 / $totTables, 2), '18'];
        $colDez19 = [number_format($colTres['dez19']*100 / $totTables, 2), '19'];
        $colDez20 = [number_format($colTres['dez20']*100 / $totTables, 2), '20'];
        $resultDez =[$colDez10,$colDez11,$colDez12,$colDez13,$colDez14,$colDez15,$colDez16,$colDez17,$colDez18,$colDez19,$colDez20];
        rsort($resultDez);
        $this->resultBd['dez'] = $resultDez;

        $tables->colOnze();
        $colTres = $tables->getResultBd();
        $colOnze11 = [number_format($colTres['onze11']*100 / $totTables, 2), '11'];
        $colOnze12 = [number_format($colTres['onze12']*100 / $totTables, 2), '12'];
        $colOnze13 = [number_format($colTres['onze13']*100 / $totTables, 2), '13'];
        $colOnze14 = [number_format($colTres['onze14']*100 / $totTables, 2), '14'];
        $colOnze15 = [number_format($colTres['onze15']*100 / $totTables, 2), '15'];
        $colOnze16 = [number_format($colTres['onze16']*100 / $totTables, 2), '16'];
        $colOnze17 = [number_format($colTres['onze17']*100 / $totTables, 2), '17'];
        $colOnze18 = [number_format($colTres['onze18']*100 / $totTables, 2), '18'];
        $colOnze19 = [number_format($colTres['onze19']*100 / $totTables, 2), '19'];
        $colOnze20 = [number_format($colTres['onze20']*100 / $totTables, 2), '20'];
        $colOnze21 = [number_format($colTres['onze21']*100 / $totTables, 2), '21'];
        $resultOnze = [$colOnze11,$colOnze12,$colOnze13,$colOnze14,$colOnze15,$colOnze16,$colOnze17,$colOnze18,$colOnze19,$colOnze20,$colOnze21];
        rsort($resultOnze);
        $this->resultBd['onze'] = $resultOnze;

        $tables->colDoze();
        $colTres = $tables->getResultBd();
        $colDoze12 = [number_format($colTres['doze12']*100 / $totTables, 2), '12'];
        $colDoze13 = [number_format($colTres['doze13']*100 / $totTables, 2), '13'];
        $colDoze14 = [number_format($colTres['doze14']*100 / $totTables, 2), '14'];
        $colDoze15 = [number_format($colTres['doze15']*100 / $totTables, 2), '15'];
        $colDoze16 = [number_format($colTres['doze16']*100 / $totTables, 2), '16'];
        $colDoze17 = [number_format($colTres['doze17']*100 / $totTables, 2), '17'];
        $colDoze18 = [number_format($colTres['doze18']*100 / $totTables, 2), '18'];
        $colDoze19 = [number_format($colTres['doze19']*100 / $totTables, 2), '19'];
        $colDoze20 = [number_format($colTres['doze20']*100 / $totTables, 2), '20'];
        $colDoze21 = [number_format($colTres['doze21']*100 / $totTables, 2), '21'];
        $colDoze22 = [number_format($colTres['doze22']*100 / $totTables, 2), '22'];
        $resultDoze =[$colDoze12,$colDoze13,$colDoze14,$colDoze15,$colDoze16,$colDoze17,$colDoze18,$colDoze19,$colDoze20,$colDoze21,$colDoze22];
        rsort($resultDoze);
        $this->resultBd['doze'] = $resultDoze;

        $tables->colTrez();
        $colTres = $tables->getResultBd();
        
        $colTrez13 = [number_format($colTres['trez13']*100 / $totTables, 2), '13'];
        $colTrez14 = [number_format($colTres['trez14']*100 / $totTables, 2), '14'];
        $colTrez15 = [number_format($colTres['trez15']*100 / $totTables, 2), '15'];
        $colTrez16 = [number_format($colTres['trez16']*100 / $totTables, 2), '16'];
        $colTrez17 = [number_format($colTres['trez17']*100 / $totTables, 2), '17'];
        $colTrez18 = [number_format($colTres['trez18']*100 / $totTables, 2), '18'];
        $colTrez19 = [number_format($colTres['trez19']*100 / $totTables, 2), '19'];
        $colTrez20 = [number_format($colTres['trez20']*100 / $totTables, 2), '20'];
        $colTrez21 = [number_format($colTres['trez21']*100 / $totTables, 2), '21'];
        $colTrez22 = [number_format($colTres['trez22']*100 / $totTables, 2), '22'];
        $colTrez23 = [number_format($colTres['trez23']*100 / $totTables, 2), '23'];
        $resultTrez = [$colTrez13,$colTrez14,$colTrez15,$colTrez16,$colTrez17,$colTrez18,$colTrez19,$colTrez20,$colTrez21,$colTrez22,$colTrez23];
        rsort($resultTrez);
        $this->resultBd['trez'] = $resultTrez;

        $tables->colQuatz();
        $colTres = $tables->getResultBd();
        
        $colQuatz14 = [number_format($colTres['quatz14']*100 / $totTables, 2), '14'];
        $colQuatz15 = [number_format($colTres['quatz15']*100 / $totTables, 2), '15'];
        $colQuatz16 = [number_format($colTres['quatz16']*100 / $totTables, 2), '16'];
        $colQuatz17 = [number_format($colTres['quatz17']*100 / $totTables, 2), '17'];
        $colQuatz18 = [number_format($colTres['quatz18']*100 / $totTables, 2), '18'];
        $colQuatz19 = [number_format($colTres['quatz19']*100 / $totTables, 2), '19'];
        $colQuatz20 = [number_format($colTres['quatz20']*100 / $totTables, 2), '20'];
        $colQuatz21 = [number_format($colTres['quatz21']*100 / $totTables, 2), '21'];
        $colQuatz22 = [number_format($colTres['quatz22']*100 / $totTables, 2), '22'];
        $colQuatz23 = [number_format($colTres['quatz23']*100 / $totTables, 2), '23'];
        $colQuatz24 = [number_format($colTres['quatz24']*100 / $totTables, 2), '24'];        
        $resultQuatz = [$colQuatz14,$colQuatz15,$colQuatz16,$colQuatz17,$colQuatz18,$colQuatz19,$colQuatz20,$colQuatz21,$colQuatz22,$colQuatz23,$colQuatz24];
        rsort($resultQuatz);
        $this->resultBd['quatz'] =$resultQuatz;

        $tables->colQuinz();
        $colTres = $tables->getResultBd();
    
        $colQuinz15 = [number_format($colTres['quinz15']*100 / $totTables, 2), '15'];
        $colQuinz16 = [number_format($colTres['quinz16']*100 / $totTables, 2), '16'];
        $colQuinz17 = [number_format($colTres['quinz17']*100 / $totTables, 2), '17'];
        $colQuinz18 = [number_format($colTres['quinz18']*100 / $totTables, 2), '18'];
        $colQuinz19 = [number_format($colTres['quinz19']*100 / $totTables, 2), '19'];
        $colQuinz20 = [number_format($colTres['quinz20']*100 / $totTables, 2), '20'];
        $colQuinz21 = [number_format($colTres['quinz21']*100 / $totTables, 2), '21'];
        $colQuinz22 = [number_format($colTres['quinz22']*100 / $totTables, 2), '22'];
        $colQuinz23 = [number_format($colTres['quinz23']*100 / $totTables, 2), '23'];
        $colQuinz24 = [number_format($colTres['quinz24']*100 / $totTables, 2), '24'];
        $colQuinz25 = [number_format($colTres['quinz25']*100 / $totTables, 2), '25'];
        $resultQuinz =[$colQuinz15,$colQuinz16,$colQuinz17,$colQuinz18,$colQuinz19,$colQuinz20,$colQuinz21,$colQuinz22,$colQuinz23,$colQuinz24,$colQuinz25];
        rsort($resultQuinz);
        $this->resultBd['quinz'] = $resultQuinz;

    }
}
