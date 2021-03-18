<?php
    include "connection_database.php";    

    // haalt alle data op uit characters
    $stmt = $conn->prepare("SELECT * FROM characters");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $id = ($_GET["id"] - 1);
    $value = $result[$id];
    
    //sluit connectie
    $conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <h1><?php echo $value["name"];?></h1>
    <a class="backbutton" href="../index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
</header>
<div class="body_container">
    <div class="container">
        <div class="detail">
            <div class="left">
                <img class="avatar" src='../resources/images/<?php echo $value["avatar"];?>' <?php if($value["id"] == 2){echo "style='transform: rotate(270deg)'";}?>>
                
                <div class="stats" style="background-color: <?php echo $value["color"];?>">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $value["health"];?></li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $value["attack"];?></li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $value["defense"];?></li>
                    </ul>
                    <ul class="gear">
                        <?php if($value["weapon"] != NULL){echo "<li><b>Weapon</b>: ".$value["weapon"]."</li>";}?>
                        <?php if($value["armor"] != NULL){echo "<li><b>Armor</b>: ".$value["armor"]."</li>";}?>
                    </ul>
                </div>
            </div>
            <div class="right">
                <p>
                    <?php echo nl2br($value["bio"], false);?>
                </p>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div>
<footer>&copy; [Bas Verdoorn] 2021</footer>
</body>
</html>