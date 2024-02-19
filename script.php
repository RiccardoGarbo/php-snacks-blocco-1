<?php 
$games = [
    [
        'home-squad'=> 'Jazz',
    'away-squad' => 'Lakers',
    'home-points'=> 122,
    'away-points'=> 138
],
    [
        'home-squad'=> 'Milkaukee Bucks',
    'away-squad' => 'Miami Heat',
    'home-points'=> 97,
    'away-points'=> 123
],
    [
        'home-squad'=> 'Phoenix Suns',
    'away-squad' => 'Sacramento Kings',
    'home-points'=> 130,
    'away-points'=> 125
],
    [
        'home-squad'=> 'Orlando Magic',
    'away-squad' => 'New York Knicks',
    'home-points'=> 118,
    'away-points'=> 100
],
    [
        'home-squad'=> 'Cleveland Cavaliers',
    'away-squad' => 'Chicago Bulls',
    'home-points'=> 108,
    'away-points'=> 105
],
    [
        'home-squad'=> 'Golden State Warriors',
    'away-squad' => 'La Clippers',
    'home-points'=> 125,
    'away-points'=> 130
],

]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($games as $game) : ?>
            <li>
                <?= $game['home-squad'] . ' - ' .$game['away-squad'] . ' | ' . $game['home-points'] . ' - ' . $game['away-points'] ?>
            </li>
        <?php endforeach ?>
    </ul>
    
    
</body>
</html>