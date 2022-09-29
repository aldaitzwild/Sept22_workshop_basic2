<?php

echo "<h2>Boucles</h2>";
echo "<hr>";

for ($i = 0; $i <= 9; $i++) echo $i;
echo "<br><br>";

for ($i = 0; $i <= 10; $i++) echo $i;
echo "<br><br>";

for ($i = 1; $i <= 10; $i++) echo $i;
echo "<br><br>";

for ($i = 10; $i >= 0; $i--) echo $i;
echo "<br><br>";

for ($i = 25; $i <= 50; $i += 5) echo "$i ";
echo "<br><br>";

for ($i = 10; $i >= -10; $i -= 3) echo $i;
echo "<br><br>";


echo "<h2>Les conditions</h2>";
echo "<hr>";

$name = 'Yoda';

/*
if($name === 'Darth Vader' || $name === 'Darth Sidious') 
    echo 'Sith';
else if ($name === 'Yoda') 
    echo 'Jedi';
else 
    echo 'sans doute une personne sans pouvoir';
*/

$type  = match($name) {
    'Darth Vader', 'Darth Sidious' => 'Sith',
    'Yoda' => 'Jedi',
    default => 'sans doute une personne sans pouvoir'
};

echo $type;

echo "<h2>Les tableaux indéxés</h2>";
echo "<hr>";


$jedis = ['Obi-Wan Kenobi', 'Yoda', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'];
$jedis[] = 'Rey';

echo "<p>Le plus vieux des jedis est : " . $jedis[1] . "</p>";

echo '<h2>Les jedis :</h2><ul>';
foreach ($jedis as $jedi) {
    echo "<li>$jedi</li>";
}

echo '</ul>';

echo "<h2>Les tableaux associatifs</h2>";
echo "<hr>";

$heroes = [
    'Yoda' => 900,
    'Leia' => 19,
    'Luke Skywalker' => 19,
    'Darth Vader' => 46,
    'Chewbacca' => 200,
];

$heroes['Han Solo'] = 29;

asort($heroes);

echo '<h2>Les Héros :</h2><ul>';
foreach ($heroes as $heroName => $age) 
    echo "<li>$heroName - $age</li>";
echo '</ul>';

echo '<h2>Les Héros par ordre alphabétique :</h2><ul>';
ksort($heroes);
foreach ($heroes as $heroName => $age) 
    echo "<li>$heroName - $age</li>";
echo '</ul>';


echo '<h2>Les vieux :</h2><ul>';
foreach ($heroes as $heroName => $age) {
    if($age >= 100)
        echo "<li>$heroName - $age</li>";
}
echo '</ul>';

echo "<h2>Les tableaux multidimensionnels</h2>";
echo "<hr>";

$characters = [
    'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
    'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
    'Gungan' => ['Jar Jar Binks'],
    'Human' => ['Han Solo', 'Leia'],
];

foreach ($characters as $race => $heroes) {
    echo "<h2>$race</h2>";

    echo "<ul>";
    foreach($heroes as $hero) {
        echo "<li>$hero</li>";
    }
    echo "</ul>";

}

foreach ($characters as $race => $heroes) {
    echo "<h2>$race (" . count($heroes). ")</h2>";
}