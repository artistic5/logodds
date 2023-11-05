<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oneFile = $currentDir . DIRECTORY_SEPARATOR . "1.php";
if(!file_exists($oneFile)){
    exit("No input file!");
}
$oneData = include($oneFile);

$outFile = $currentDir . DIRECTORY_SEPARATOR . "bets.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$favorites = [];

foreach($oneData as $raceNumber => $oneRaceDate){
    $raceFavorite = $oneRaceDate["favorite"];
    if(!in_array($raceFavorite, $favorites)) $favorites[] = $raceFavorite;
}

$outtext .= "/** Favorites: " . implode(", ", $favorites) . "*/\n";

foreach($oneData as $raceNumber => $oneRaceDate){
    $raceFavorite = $oneRaceDate["favorite"];
    $allWinsValues = explode(", ", $oneRaceDate['All Wins']);
    $wp = array_intersect($favorites, $allWinsValues);
    $racetext = "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'Place' =>  '" . implode(", ", $wp) . "',\n";;
    if(in_array($raceFavorite, $wp)){
        $racetext .= "\t\t'Qin/Trio' =>  '" . implode(", ", $allWinsValues) . "',\n";;
    }
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);

?>
