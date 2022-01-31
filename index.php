<?php
// session_start();
// echo $_SESSION["score"];
    require_once('Hero.php');
    require_once('Orc.php');
    $hero = new Hero(2000, 0, 'knife', 400, 'Goldshield', 600);
    $orc = new Orc(1000); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container-fluid p-0">
    <div class="row justify-content-evenly ">
        <div class="col-12 col-xl-4 redefineHero text-center p-3 mt-5">
            <h1>Héros</h1>
            <ul class="list-unstyled">
                <li>Santé : <?=$hero->getHealth();?></li>
                <li>Rage : <?=$hero->getRage();?></li>
                <li>Arme : <?=$hero->getWeapon();?></li>
                <li>Dommages arme : <?=$hero->getWeaponDamage();?></li>
                <li>Bouclier : <?=$hero->getShield();?></li>
                <li>Dommages bouclier : <?=$hero->getShieldValue();?></li>
            </ul>

        </div>
        <div class="col-12 col-xl-4 redefineHero text-center p-3 mt-5">
            <h1>Orque</h1>
            <ul class="list-unstyled">
                <li>Santé :<?=$orc->getHealth();?></li>
                <li>Rage :<?=$orc->getRage();?></li>
                <li>dégâts de l'arme :<?=$orc->getDamage();?></li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-xl-8 redefineHero mt-5 p-3">
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae explicabo assumenda praesentium blanditiis ea quidem laudantium rem voluptas libero at numquam excepturi sit, natus magni ipsam eaque perspiciatis quam eveniet saepe architecto sequi aperiam? Neque sint ratione cum illo quaerat, laborum ad! Mollitia, obcaecati ad! Doloribus nisi consequuntur maiores.</p>
        </div>
    </div>
</div>
<p>Héros :
    <ul>
        <li>Santé :<?=$hero->getHealth();?></li>
        <li>Rage :<?=$hero->getRage();?></li>
        <li>Arme :<?=$hero->getWeapon();?></li>
        <li>Dommages arme :<?=$hero->getWeaponDamage();?></li>
        <li>Bouclier :<?=$hero->getShield();?></li>
        <li>Dommages bouclier :<?=$hero->getShieldValue();?></li>
    </ul>
</p>

<p>Orc :
    <ul>
        <li>Santé :<?=$orc->getHealth();?></li>
        <li>Rage :<?=$orc->getRage();?></li>
        <li>dégâts de l'arme :<?=$orc->getDamage();?></li>
    </ul>
</p>


<?php
$i = 0;
$j = 0;
while ($hero->getHealth() > 0){
    $attackValue = $orc->attack();
    $hero->attacked($attackValue);
    if ($hero->getHealth() > 0){
        if ($hero->getRage() > 100){
            $orc->attacked($hero->getWeaponDamage());
            $hero->setRage(0);
            $j++;
        }
        $i++;
        if($orc->getHealth() <= 0){
            echo 'L\'orc est mort';
            break;
        }
    }else {
        echo 'vous êtes mort';
        break;
    }

    ?>

    <!-- <p>Attaques de l'Orc :
        <ul>
            <li>Dégâts de l'orc :<?=$orc->getDamage();?></li>
            <li>Dégâts non absorbés :<?=($orc->getDamage() - $hero->getShieldValue());?></li>
            <li>Rage actuelle du Héros : <?=$hero->getRage();?></li>
            <li>Santé restante : <?=$hero->getHealth();?></li>
        </ul>
    </p>    -->
<?php
}
echo "le nombres d'attaques est de $i";
?>

    <p>Héros :
        <ul>
            <li>Santé :<?=$hero->getHealth();?></li>
        </ul>
    </p>

<p>Orc :
        <ul>
            <li>Santé :<?=$orc->getHealth();?></li>
        </ul>
    </p>

<?="le nombres d'attaques est de $j";?>
 
</body>
</html>