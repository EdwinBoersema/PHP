<?php
$loggedin = true;
$arr = [1,2,3,4,5,6,7,8];

// if($loggedin){
//     echo "You're logged in.";
// } else {
//     echo "You're not logged in.";
// };

// echo ($loggedin) ? "You are logged in" : "You are not logged in";

// $isRegistered = ($loggedin == true) ? true : false;
// echo $isRegistered;

// $age = 8;
// $score = 15;

// // nested shorthand statement

// echo "Your score is: " . ($score > 10 ? ($age > 10 ? 'Average' : 
// 'Exceptional') : ($age > 10 ? 'Horrible':'Average'));
?>

<!-- Both examples do the same -->

<div>
    <?php if ($loggedin) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<div>
    <?php if ($loggedin) : ?>
        <h1>Welcome User</h1>
    <?php else : ?>
        <h1>Welcome Guest</h1>
    <?php endif ?>
</div>

<div>
    <?php foreach ($arr as $val) { ?>
        <li><?php echo $val; ?></li>
    <?php } ?>
</div>

<div>
    <?php for($i = 0; $i < count($arr) ; $i++): ?>
        <li><?php echo $arr[$i]; ?></li>
    <?php endfor ?>
</div>
