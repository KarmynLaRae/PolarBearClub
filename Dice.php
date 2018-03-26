<title>Dice</title>
<h1>
  How Many Polar Bears?
</h1>
<style>

.container {
  background: #ccc; 
  padding: 10px;
  text-align: center;
}

.die {
  position: relative;
  width: 30px;
  height: 30px;
  border: 1px solid #000;
  border-radius: 5px;
  margin: 5px;
  display: inline-block;
  background: #fff;
  }
  .dot {
    position: absolute;
    background: #000;
    width: 1px;
    height: 1px;
    border: 1px solid #000;
    border-radius: 50%;
  }
  
  .one .dot:first-of-type {       
       top: 42%;
       left: 42%;
     } 
  
  .two .dot:first-of-type {       
       top: 5px;
       left: 5px;
     } 
    
  .two .dot:last-of-type {       
       bottom: 5px;
       right: 5px;
     } 
  
  .three .dot:nth-child(1) {       
       top: 5px;
       left: 5px;
     } 
    
  .three   .dot:nth-child(2) {       
       top: 42%;
       left: 42%;
     }
    
  .three  .dot:nth-child(3) {       
       bottom: 5px;
       right: 5px;
     } 
  
  .four   .dot:nth-child(1) {       
       top: 5px;
       left: 5px;
     } 
    
  .four   .dot:nth-child(2) {       
       top: 5px;
       right: 5px;
     }
    
  .four   .dot:nth-child(3) {       
       bottom: 5px;
       left: 5px;
     } 
    
  .four   .dot:nth-child(4) {       
       bottom: 5px;
       right: 5px;
     } 
  
  .five .dot:nth-child(1) {       
       top: 5px;
       left: 5px;
     } 
    
  .five .dot:nth-child(2) {       
       top: 5px;
       right: 5px;
     }
    
  .five .dot:nth-child(3) {       
       top: 42%;
       right: 42%;
     }
    
  .five .dot:nth-child(4) {       
       bottom: 5px;
       left: 5px;
     } 
    
  .five .dot:nth-child(5) {       
       bottom: 5px;
       right: 5px;
     } 
  
  .six .dot:nth-child(1) {       
       top: 5px;
       left: 5px;
     } 
    
  .six .dot:nth-child(2) {       
       top: 5px;
       right: 5px;
     }
    
  .six .dot:nth-child(3) {       
       left: 5px;
       top: 42%;
     }
    
  .six .dot:nth-child(4) {       
       right: 5px;
       top: 42%;
     } 
    
  .six .dot:nth-child(5) {       
       bottom: 5px;
       left: 5px;
     } 
    
  .six .dot:nth-child(6) {       
       bottom: 5px;
       right: 5px;
     } 

  .hidden {
    display:none;
  }
  
  .hover:hover .hidden{
    display:block;
  }
</style>
<?php 

$dice = array(1,2,3,4,5,6);
$diceText = array("one","two","three","four","five","six");
$i = 0;
$rolledDice = array();
$polarBearCount = 0;
$fishCount = 0;
$planktonCount = 0;

echo "</br><div class='container'>";

while ($i <= 4) {
  $roll = rand(0,5);
  echo "<div class='die ".$diceText[$roll]."'>";
  $pips = 0;
  while ($pips <= $roll) {
    echo "<div class='dot'></div>";
    $pips++;
  }
  echo "</div>";
  $diceValue = $dice[$roll];
  $rolledDice[$i] = $diceValue;
    if($diceValue == 3){
    $polarBearCount += 2;
    $fishCount += 4;
  } elseif ($diceValue == 5){
    $polarBearCount += 4; 
    $fishCount += 2; 
  } elseif ($diceValue == 1){
    $fishCount += 6;
  } else {
    $planktonCount += ($diceValue*7);
    $planktonCount += (7-$diceValue);
  }

  $i++;
}

echo "</div>";
// echo "<pre>";
// echo "dice: ";
// print_r ($rolledDice);
// echo "</pre>";
// echo "</br></br>";
echo "<p class='hover'>Hover for Polar Bears<span class='hidden'>Polar Bears: ".$polarBearCount."</span></p>";
echo "</br>";
echo "<p class='hover'>Hover for Fish<span class='hidden'>Fish: ".$fishCount."</span></p>";
echo "</br>";
echo "<p class='hover'>Hover for Plankton<span class='hidden'>Plankton: ".$planktonCount."</span></p>";

?>
