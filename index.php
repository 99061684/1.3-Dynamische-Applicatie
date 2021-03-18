<?php
    include "includes/connection_database.php";    

    //haalt data op uit de database
    $stmt = $conn->prepare("SELECT count(*) AS aantal FROM characters");
    $stmt->execute(); 	
    $result1 = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $conn->prepare("SELECT * FROM characters ORDER BY name");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

    <div class="body_container">
<?php
    foreach ($result as $array => $value) {
        echo "<div class='container'>
            <a class='item' href=".'includes/character.php?id='.$value["id"].">
                <div class='left'>
                    <img class='avatar' src=".'resources/images/'.$value["avatar"]; if($value["id"] == 2){echo " style='transform: rotate(270deg)'";} echo ">
                    </div>
                    <div class='right'>
                    <h2>".$value["name"]."</h2>
                        <div class='stats'>
                            <ul class='fa-ul'>
                            <li><span class='fa-li'><i class='fas fa-heart'></i></span>".$value["health"]."</li>
                            <li><span class='fa-li'><i class='fas fa-fist-raised'></i></span>".$value["attack"]."</li>
                            <li><span class='fa-li'><i class='fas fa-shield-alt'></i></span>".$value["defense"]."</li>
                        </ul>
                        </div>
                    </div>
                    <div class='detailButton'><i class='fas fa-search'></i> bekijk</div>
                </a>
            </div>";
    }
?>
    </div>
<footer>&copy; [Bas Verdoorn] 2021</footer>
</body>
</html>

