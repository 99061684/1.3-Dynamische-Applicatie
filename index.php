<?php
    include "includes/connection_database.php";    

    //haalt data op uit de database
    $stmt = $conn->prepare("SELECT count(*) AS aantal FROM characters");
    $stmt->execute(); 	
    $result1 = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($result1); //print resultaat
    // echo $result1["aantal"];

    $stmt = $conn->prepare("SELECT * FROM characters ORDER BY name");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // print_r($result); //print resultaat

    //sluit connectie
    $conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <h1>Alle <?php echo $result1["aantal"]; ?> characters uit de database</h1>
</header>

<?php
    foreach ($result as $array => $value) {
        echo "<div id='container'>";
            echo "<a class='item' href=".'includes/character.php?id='.$value["id"].">";
                echo "<div id='left'>";
                    echo "<img class='avatar' src=".'resources/images/'.$value["avatar"].">";
                echo "</div>";
                echo "<div id='right'>";
                    echo "<h2>".$value["name"]."</h2>";
                    echo "<div id='stats'>";
                        echo "<ul class='fa-ul'>
                            <li><span class='fa-li'><i class='fas fa-heart'></i></span>".$value["health"]."</li>
                            <li><span class='fa-li'><i class='fas fa-fist-raised'></i></span>".$value["attack"]."</li>
                            <li><span class='fa-li'><i class='fas fa-shield-alt'></i></span>".$value["defense"]."</li>
                        </ul>";
                    echo "</div>";
                echo "</div>";
                echo "<div id='detailButton'><i class='fas fa-search'></i> bekijk</div>";
            echo "</a>";
        echo "</div>";
    }
?>
<!-- <div id="container">
    <a class="item" href="character.html">
        <div class="left">
            <img class="avatar" src="resources/images/bowser.jpg">
        </div>
        <div class="right">
            <h2>Bowser</h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> 10000</li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> 400</li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> 100</li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
</div> -->
<footer>&copy; [Bas Verdoorn] 2021</footer>
</body>
</html>

