<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$probas = [];

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

$totalRaces = count($allOdds);

if($raceDate == "0731") $totalRaces = 10;

for($r=1; $r <= $totalRaces; $r++){
    if(!isset($allOdds[$r])) continue;
    $odds = $allOdds[$r];
    $proba = [];
    $sum = 0;
    foreach($odds as $i => $oddsI){
            $proba[$i] = 100 * (log($oddsI) / $oddsI) / exp(1);
            $sum += $proba[$i];
            }
    foreach($odds as  $i => $oddsI){
        //adjust to 100 percentage
        $proba[$i] = round( $proba[$i] * 100 / $sum, 2);

    }
    arsort($proba);
    $probas[$r] = $proba;
}

$outFile = $currentDir . DIRECTORY_SEPARATOR . "probas.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($probas[$raceNumber])) continue;
    $outtext .= "\t'$raceNumber' => [\n";
    $outtext .= "\t\t/**\n";
    $outtext .= "\t\tRace $raceNumber\n";
    $outtext .= "\t\t*/\n";
    $tmpArray = $probas[$raceNumber];
    $tmpSum = 0;

    $indicators = [ 'B' => 0, 'R' => 0 ];
    
    foreach ($tmpArray as $i => $val){
        $outtext .= "\t\t$i => $val,\n";
        if(in_array($i, $blacks)) {
            $indicators['B'] += $val;
        }
        elseif(in_array($i, $reds)) {
            $indicators['R'] += $val;
        }
        $tmpSum += $val;
    }

    arsort($indicators);

    $indicators2 = ['R (O) position' => 0, 'B (E) position' => 0];

    $values = array_values($tmpArray);
    for($j = 0; $j < count($values); $j ++)
    {
        if(($j + 1) % 2 === 1) $indicators2['R (O) position'] += $values[$j];
        else $indicators2['B (E) position'] += $values[$j];
    }

    if(abs($indicators2['R (O) position'] - $indicators2['B (E) position']) < 0.9) {
        $indicators2 = ['Equal positions R(O) and B(E)' => 'true'];
    }

    arsort($indicators2);

    foreach($indicators2 as $label => $indicator) {
        $outtext .= "\t\t'$label' => $indicator,\n";
    }

    foreach($indicators as $label => $indicator) {
        $outtext .= "\t\t'$label' => $indicator,\n";
    }
   
    $outtext .= "\t\t'Sum' => $tmpSum,\n";
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);