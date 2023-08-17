<?php
$parfums =[
    'Fraise' => 4,
    'chocolat'=> 5,
    'vanille'=> 3
];

$cornets =[
    'pot' => 2,
    'cornet' => 3
]; 

$supplements = [
    'pepite de cocholat' => 1,
    'chantilly' => 0.5
]; 
$title = 'Composer votre glace';
$ingredients =[];
$total = 0;
if (isset($_GET['parfum'])){
    foreach($_GET['parfum'] as $parfum){
        if(isset($parfums[$parfum])){
            $ingredients[] = $parfum;
            $total +=$parfums[$parfum];
        }
    }
}

if (isset($_GET['cornet'])){
    $cornet = $_GET['cornet'];
        if(isset($cornets[$cornet])){
            $ingredients[] = $cornet;
            $total +=$cornets[$cornet];
        }
}
 
if (isset($_GET['supplement'])){
    foreach($_GET['supplement'] as $suplement){
        if(isset($supplements[$suplement])){
            $ingredients[] = $suplement;
            $total +=$supplements[$suplement];
        }
    }
}
require 'elements/header.php';
?>

<h2>Coposez votre glace </h2>
<div class="row">
        <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Votre glace</h5>
                        <ul>
                            <?php foreach($ingredients as $ingredient): ?>
                                <li><?=$ingredient ?></li>
                            <?php endforeach; ?>
                            <p>
                                <strong>Prix : <?=$total?></strong>
                            </p>
                        </ul>
                    </div>
                </div>
        </div>
    <div class="col-md-8">
        <form action="jeu.php" method="GET">
            <h5>Choisissez vos parfum</h5>
            <?php foreach($parfums as $parfum => $prix): ?>
            <div class="checkbox">
                <label>
                    <?=checkbox ('parfum', $parfum, $_GET) ?>
                    <?= $parfum ?> : <?=$prix?> $
                </label>
            </div>
            <?php endforeach ;?>
            <h5>Choisissez votre cornet </h5>
            <?php foreach($cornets as $cornet => $prix): ?>
            <div class="checkbox">
                <label>
                    <?=radio ('cornet', $cornet, $_GET) ?>
                    <?= $cornet ?> : <?=$prix?> $
                </label>
            </div>
            <?php endforeach ;?>
            <h5>Choisissez vos siplements</h5>
            <?php foreach ($supplements as $suplement => $prix) : ?>
            <div class="checkbox">
                <label>
                    <?= checkbox('supplement', $suplement, $_GET) ?>
                    <?= $suplement ?> : <?=$prix?> $
                </label>
            </div>
            <?php endforeach; ?>
                <button type="submit" class="btn btn-primary">Composer votre glace</button>
        </form>
    </div>
</div>

<h2>$_GET</h2>
<pre>
  <?php var_dump($_GET) ?>
</pre>

<h2>$_POST</h2>
<pre>
  <?php var_dump($_POST) ?>
</pre>
<?php require 'elements/footer.php'; ?>
 