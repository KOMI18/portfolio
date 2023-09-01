<link rel="stylesheet" href="demo.css">
<link rel="stylesheet" href="shape.css">

<?php 
require 'header.php';
require 'fonction.php';

 $parfuns = [
    'fraise' => 300,
    'vanille' => 200,
    'chocolat' => 400
 ];
 $supplements = [
    "pepite" => 150,
    'chantille' => 75

 ];
 $cornets = [
    'pot' => 200,
    'cornet' => 100
 ];
 $ingredients = [];
 $total = 0 ;
        if(isset ($_GET['parfun'])){
            foreach($_GET['parfun'] as $parfun){
                if (isset($parfuns[$parfun])){
                    $ingredients[] = $parfun;
                    $total += $parfuns[$parfun];
                }
            }
        }
        if(isset ($_GET['supplement'])){
            foreach($_GET['supplement'] as $supplement){
                if (isset($supplements[$supplement])){
                    $ingredients[] = $supplement;
                    $total += $supplements[$supplement];
                }
            }
        }
        if(isset ($_GET['cornet'])){
            $cornet =  $_GET['cornet'];
                if (isset($cornets[$cornet])){
                    $ingredients[] = $cornet;
                    $total += $cornets[$cornet];
                }
            }
        



?>
 <br><br><br>
<div class="sum">
<div class="row1">
 <h1> coposer votre glace</h1><br><br>
    <form action="demo.php" method="get">
       <h2>choisissez vos glaces</h2> <br>
            <?php foreach ($parfuns as $parfun => $prix):?>
                <?= checkbox('parfun' , $parfun , $_GET)?> <?=$parfun?> - <?=$prix?> frs <br><br>
            <?php endforeach;?>
        <h2> choisissez vos supplements</h2> <br>
            <?php foreach ($supplements as $supplement => $prix):?>
                <?= checkbox('supplement' , $supplement , $_GET)?> <?=$supplement?> - <?=$prix?> frs <br><br>
            <?php endforeach;?>
        <h2>choisissez votre cornet</h2> <br>
            <?php foreach ($cornets as $cornet => $prix):?>
                <?= radio('cornet' , $cornet , $_GET)?> <?=$cornet?> - <?=$prix?> frs <br><br>
            <?php endforeach;?>
            <br><br>
        <button type="submit" class = 'btn1'> Terminer</button> 
        
    </form>
</div>
<div class="ROW2">
    <fieldset> 
        <strong> VOTRE GLACE</strong>
               <form action="" method="post">
               <ul>
                   <?php foreach($ingredients as $ingredient):?>  
                    <li> <?= $ingredient?>  </li>
                    <?php endforeach;?> <br><br>
                  PRIX: <strong> <?= $total ?></strong> frs 
                </ul>    <br><br>  
                <button type="submit" class= btn2>passer la commande</button> 
               </form>    

    </fieldset> <br><br><br><br><br>
    <div class="carousel">
        <img src="img/four-scoops-ice-cream.jpg" alt="" class = 'imgbtn' class ='carousel-items'>
        <img src="img/ici.png" alt=""  class ='carousel-items'>
    </div>
</div>
</div>