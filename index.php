<!-- PHP  -->
<?php
session_start();
?>

<!-- ----------------------------------------------------------------------- -->
<!-- I_Les Variables -->
<!-- ----------------------------------------------------------------------- -->
<?php
echo "--------------------------- I_Les Variables ---------------------------<br><br>";
?>

<!-- Exercice 1 -->
<?php
echo "Exercice 1";
$txt = "PHP";
echo "<pre>", var_dump($txt), "</pre>";
?>
<!-- <?= $txt ?> autre facon de faire un echo-->

<!-- Exercice 2 -->
<?php
echo "Exercice 2";
$nom = "GORKA";
$prenom = "Wladislas";
$age = "33";
echo "<pre>", var_dump($nom, $prenom, $age), "</pre>";
?>

<!-- Exercice 3 -->
<?php
echo "Exercice 3";
$km = 1;
echo "<pre>", var_dump($km), "</pre>";
$km = 3;
echo "<pre>", var_dump($km), "</pre>";
$km = 125;
echo "<pre>", var_dump($km), "</pre>";
?>

<!-- Exercice 4 -->
<?php
echo "Exercice 4";
$int = 1;
$float = 1.0;
$string = "1";
$bool = true;
echo "<pre>", var_dump($int, $float, $string, $bool), "</pre>";
?>

<!-- Exercice 5 -->
<?php
echo "Exercice 5";
$varExo5;
echo "<pre>", var_dump($varExo5), "</pre>";
$varExo5 = "Coucou";
echo "<pre>", var_dump($varExo5), "</pre>";
?>

<!-- Exercice 6 -->
<?php
echo "<br>Exercice 6<br>";
$nom = "Gorka";
echo "Bonjour $nom, comment vas tu?<br>";
?>

<!-- Exercice 7 -->
<?php
echo "<br>Exercice 7<br>";
$nom = "GORKA";
$prenom = "Wladislas";
$age = "33";
echo "Bonjour $nom $prenom, tu as $age ans.<br>";
?>

<!-- Exercice 8 -->
<?php
echo "<br>Exercice 8<br>";
$operation1 = 3 + 4;
$operation2 = 5 * 20;
$operation3 = 45 / 5;
echo "<pre>", var_dump($operation1, $operation2, $operation3), "</pre>";
?>

<!-- ----------------------------------------------------------------------- -->
<!-- II_Les Conditions -->
<!-- ----------------------------------------------------------------------- -->
<?php
echo "<br><br>--------------------------- II_Les Conditions ---------------------------<br><br>";
?>

<!-- Exercice 1 -->
<?php
echo "<br>Exercice 1<br>";
$age = 13;
if($age<18){
    echo "Vous êtes mineur.";
}else{
    echo "Vous êtes majeur.";
}
?>

<!-- Exercice 2 -->
<?php
echo "<br><br>Exercice 2<br>";
$age = 18;
$genre = "Homme";

$ageP = $age >= 18 ? "majeur" : "mineur";
$genreP = $genre == "Homme" ? "un homme" : "une femme";

echo "Vous êtes $genreP et vous êtes $ageP.";
?>

<!-- Exercice 3 -->
<?php
echo "<br><br>Exercice 3<br>";
// echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
$maVariable = "Femme";
if($maVariable!= "Homme"){
    echo "C'est une développeuse !!!";
}else{
    echo "C'est un développeur !!!";
}
?>

<!-- Exercice 4 -->
<?php
echo "<br><br>Exercice 4<br>";
// echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
$monAge = 19;
if($monAge >= 18){
    echo "Tu es majeur";
}else{
    echo "Tu n'es pas majeur";
}
?>

<!-- Exercice 5 -->
<?php
echo "<br><br>Exercice 5<br>";
// echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
$maVariable = true;
if($maVariable == false){
    echo "c'est pas bon !!!";
}else{
    echo "c'est ok !!";
}
?>

<!-- Exercice 6 -->
<?php
echo "<br><br>Exercice 6<br>";
// echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
$maVariable = true;
if($maVariable){
    echo 'c\'est ok !!!'; // echappement
}else{
    echo "c'est pas bon !!!";
}
?>

<!-- ----------------------------------------------------------------------- -->
<!-- III_Les Boucles -->
<!-- ----------------------------------------------------------------------- -->
<?php
echo "<br><br>--------------------------- II_Les Boucles ---------------------------<br><br>";
?>

<!-- Exercice 1 -->
<?php
echo "<br>Exercice 1<br>";
$toTen = 0;
for($i= 0; $i< 10; $i++){
    var_dump($toTen);
    $toTen ++;
}
?>

<!-- Exercice 2 -->
<?php
echo "<br><br>Exercice 2<br>";
$maVariable1 = 0;
$maVariable2 = 3;
for($i= 0; $i<= 20; $i++){
    echo $maVariable1 * $maVariable2, " ";
    $maVariable1 ++;
}
?>

<!-- Exercice 2 bis -->
<?php
echo "<br><br>Exercice 2 bis<br>";
$maVariable1 = 0;
$maVariable2 = 3;
while($maVariable1<20){
    $maVariable1 *= $maVariable2;
    echo $maVariable1, " ";
    $maVariable1 ++;
}
?>

<!-- Exercice 3 -->
<?php
echo "<br><br>Exercice 3<br>";
$maVariable1 = 100;
$maVariable2 = 1;
for($i= 100; $i> 10; $i--){
    echo $maVariable1 / $maVariable2, " ";
    $maVariable1 --;
}
?>

<!-- Exercice 4 -->
<?php
echo "<br><br>Exercice 4<br>";
$myVar = 1;
while($myVar < 10){
    var_dump($myVar);
    $myVar = $myVar + $myVar/2;
}
var_dump($myVar);
?>

<!-- Exercice 5 -->
<?php
echo "<br><br>Exercice 5<br>";
for($i= 1; $i<= 15; $i++){
    echo "On y arrive presque.<br>";
}
?>

<!-- Exercice 6 -->
<?php
echo "<br><br>Exercice 6<br>";
for($i= 20; $i>= 0; $i--){
    echo "C'est presque bon.<br>";
}
?>

<!-- Exercice 7 -->
<?php
echo "<br><br>Exercice 7<br>";
for($i= 1; $i<= 100; $i+=15){
    echo "On tient le bon bout.<br>";
}
?>

<!-- Exercice 8 -->
<?php
echo "<br><br>Exercice 8<br>";
for($i= 200; $i>= 0; $i-=12){
    echo "Enfin !!!!<br>";
}
?>

<!-- ----------------------------------------------------------------------- -->
<!-- IV_Les Tableaux -->
<!-- ----------------------------------------------------------------------- -->
<?php
echo "<br><br>--------------------------- IV_Les Tableaux ---------------------------<br><br>";
?>

<!-- Exercice 1 -->
<?php
echo "<br>Exercice 1<br>";
$mois = array("janvier","février","mars","avril","mai","juin","juillet",
                "aout","septembre","octobre","novembre","décembre");
var_dump($mois);
?>

<!-- Exercice 2 -->
<?php
echo "<br><br>Exercice 2<br>";
var_dump( $mois[2] );
?>

<!-- Exercice 3 -->
<?php
echo "<br><br>Exercice 3<br>";
var_dump( $mois[5] );
?>

<!-- Exercice 4 -->
<?php
echo "<br><br>Exercice 4<br>";
$mois[7]="août";
var_dump( $mois[7] );
//var_dump( $mois[7][0] ); donne la lettre
?>

<!-- Exercice 5 -->
<?php
echo "<br><br>Exercice 5<br>";
$hautDeFrance = array("02"=>"Aisne","59"=>"Nord","60"=>"Oise","62"=>"Pas-de-Calais","80"=>"Somme");
var_dump($hautDeFrance);
?>

<!-- Exercice 6 -->
<?php
echo "<br><br>Exercice 6<br>";
var_dump( $hautDeFrance["59"] );
?>

<!-- Exercice 7 -->
<?php
echo "<br><br>Exercice 7<br>";
$hautDeFrance["51"] = "Marne";
var_dump($hautDeFrance);
?>
<!-- Exercice 8 -->
<?php
echo "<br><br>Exercice 8<br>";
foreach( $mois as $key => $value ) {
    echo $key+1 ." : ". $value ."<br>";
}
?>
<!-- Exercice 9 -->
<?php
echo "<br><br>Exercice 9<br>";
foreach( $hautDeFrance as $key => $value ) {
    echo $key ." : ". $value ."<br>";
}
?>
<!-- Exercice 10 -->
<?php
echo "<br><br>Exercice 10<br>";
foreach( $hautDeFrance as $key => $value ) {
    echo  "Le département " . $value . " a le numéro " . $key ."<br>";
}
?>

<!-- ----------------------------------------------------------------------- -->
<!-- IV_Les Fonctions -->
<!-- ----------------------------------------------------------------------- -->
<?php
echo "<br><br>--------------------------- IV_Les Fonctions ---------------------------<br><br>";
?>

<!-- Exercice 1 -->
<?php
echo "<br>Exercice 1<br>";
function returnTrue() : bool{
    return true;
}
var_dump(returnTrue());
?>

<!-- Exercice 2 -->
<?php
echo "<br><br>Exercice 2<br>";
function returnChaine($chaine) : string{
    return $chaine;
}
var_dump(returnChaine("Hello!"));
?>

<!-- Exercice 3 -->
<?php
echo "<br><br>Exercice 3<br>";
function concatChaine($chaine1, $chaine2) : string{
    return $chaine1 . $chaine2;
}
var_dump(concatChaine("Hello ", "World !"));
?>

<!-- Exercice 4 -->
<?php
echo "<br><br>Exercice 4<br>";
function nbCompare($a, $b) : string{
    if ($a == $b) return "Les deux nombres sont identiques - " . $a . " = " . $b;
    if ($a < $b) return "Le premier nombre est plus petit - " . $a ." < ". $b;
    return "Le premier nombre est plus grand - " . $a ." > ". $b;
}
$nb1 = 5;
$nb2 = 3;
var_dump(nbCompare($nb1, $nb2));
?>

<!-- Exercice 5 -->
<?php
echo "<br><br>Exercice 5<br>";
function concatNbChaine($nb, $chaine) : string{
    return $nb . $chaine;
}
var_dump(concatNbChaine(2, " deux"));
?>

<!-- Exercice 6 -->
<?php
echo "<br><br>Exercice 6<br>";
function concatPersonne($nom, $prenom, $age) : string{
    return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age ." ans.";
}
var_dump(concatPersonne("Gorka", "Wladislas", 33));
?>

<!-- Exercice 7 -->
<?php
echo "<br><br>Exercice 7<br>";
function isAdult($age, $genre) : string{
    $ageP = $age >= 18 ? "majeur" : "mineur";
    $genreP = $genre == "Homme" ? "un homme" : "une femme";
    return "Vous êtes $genreP et vous êtes $ageP";
}
var_dump(isAdult(13, "Femme"));
?>

<!-- Exercice 8 -->
<?php
echo "<br><br>Exercice 8<br>";
function somme($a = 0, $b = 0, $c = 0) : int{
    return $a + $b + $c;
}
var_dump(somme(2,4,3));
var_dump(somme(2,4));
var_dump(somme());
?>

<!-- ----------------------------------------------------------------------- -->
<!--  -->
<!-- ----------------------------------------------------------------------- -->

<!-- <?php
echo "<br><br>--------------------------- POO ---------------------------<br><br>";

class adventurer{
    //Properties
    private $name;
    private $gender;
    private $level;
    private $stats;

    //Methods
    public function __construct($name = "NoName", $gender = "Undefined", $level = "0", $stats = "0,0,0"){
        $this->name = $name;
        $this->gender = $gender;
        $this->level = $level;
        $statsArray = ["Force","Intel","Endu"];
        $stats = explode(",", $stats);
        $this->stats = array_combine($statsArray,$stats);
    }

    public function set_name( $name ){
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }

    public function set_gender( $gender ){
        $this->gender = $gender;
    }
    public function get_gender(){
        return $this->gender;
    } 

    public function set_level( $level ){
        $this->level = $level;
    }
    public function get_level(){
        return $this->level;
    }

    public function set_stats( $stats ){
        $this->stats = $stats;
    }
    public function get_stats(){
        return $this->stats;
    }

    public function printInfo(){
        echo "<br><br>Name : ". $this->name .
             "<br>Gender : ". $this->gender .
             "<br>Level : ". $this->level;
        foreach($this->stats as $k => $v){
            echo "<br>". $k ." : ". $v;
        }
    }

    public function levelUp(){
        $this->level ++;
        foreach($this->stats as $k => &$v){
            $v++;
        }
    }
}

$a = new adventurer();
$a->set_name("Bernard");
$a->set_gender("Male");
$a->set_level(1);
$a->set_stats([4,2,3]);
$a->printInfo();

$b = new adventurer("Julie","Female",1,"1,4,2");
$b->printInfo();
$b->levelUp();
$b->printInfo();
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exophp</title>
</head>
<body>
<!-- ----------------------------------------------------------------------- -->
<!--  -->
<!-- ----------------------------------------------------------------------- -->

<?php
echo "<br><br>--------------------------- Superglobales ---------------------------<br><br>";

//foreach ($_SERVER as $parm => $value)  echo "$parm = '$value' <br>";
//phpinfo();
echo "Exo 1<br><br>";
echo "User agent : " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Ip : " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "serveur name : " . $_SERVER['SERVER_NAME'];


echo "<br><br>Exo 2<br><br>";

$_SESSION["nom"] = $nom;
$_SESSION["prenom"] = $prenom;
$_SESSION["age"] = $age;
?>

<br><a href=info.php>info</a><br>

<p>Formulaire animal</p>
<form method='POST' name='formAnimal' action='preferences.php'>
    <input type='text' name='animal' placeholder='animal'>
    <input type='text' name='couleur' placeholder='couleur'>
    <input type='submit' value='valider'>
</form>

<br><a href=login.php>login.php</a><br>
