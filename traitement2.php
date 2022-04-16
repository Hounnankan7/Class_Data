<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playing Around 2 </title>
    <meta name="description" content="A simple HTML5 and data projects.">
    <meta name="hounnankan_prince_donald" content="Data about a game">

    <link rel="stylesheet" href="css/stylesheet2.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>    <!--Integration de Chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js">//Telechargement de la bibliothèque</script>
</head>


<body>

    <header>

    </header>

    <div class="bouton_all">
        <button class="bouton1"><a href="index.php">Accueil</a></button>
        <button class="bouton2"><a href="personnage.php">Character</a></button>
        <button class="bouton3"><a href="ennemie.php">Ennemies</a></button>
    </div>

    <?php 

        try {
            // Souvent on identifie cet objet par la variable $conn ou $db
            $mysqlConnection2 = new PDO('mysql:host=localhost:8889;dbname=game_db;charset=utf8','root','root');

        }
        catch(Exception $e)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
        }


       // $image_ennemy = "";
       // $name_ennemy = "";
       // $health = 0;
       // $technical =0;
       // $attack = 0;
       // $defense =0;
       // $agility =0;
       // $karma =0;
  
        $name = 10;
        $image = 100;
        $health_point = 40;
        $technical_point =50;
        $attack_point = 10;
        $defense_point =20;
        $agility_point =30;
        $karma_point =20;
        $loot = 10;

        if ($_POST['ennemie'] == 'Kenshin Uesugi') {

            $health_statement = $mysqlConnection2->prepare('SELECT * FROM `ennemy_table` WHERE `id_ennemy`=1');
            $health_statement->execute();
            $c = $health_statement->fetchAll();

            foreach ($c as $c) {
                $name = $c['name_ennemy'];
                $image = $c['path_to_image'];
                $health_point = $c['health'];
                $technical_point =$c['technical'];
                $attack_point = $c['attack'];
                $defense_point =$c['defense'];
                $agility_point =$c['agility'];
                $karma_point =$c['karma'];
                $loot = $c['exp_loot'];
            }
        }
        elseif ($_POST['ennemie'] == 'Motochika Chosokabe') {
            
            $health_statement = $mysqlConnection2->prepare('SELECT * FROM `ennemy_table` WHERE `id_ennemy`=2');
            $health_statement->execute();
            $c = $health_statement->fetchAll();

            foreach ($c as $c) {
                $name = $c['name_ennemy'];
                $image = $c['path_to_image'];
                $health_point = $c['health'];
                $technical_point =$c['technical'];
                $attack_point = $c['attack'];
                $defense_point =$c['defense'];
                $agility_point =$c['agility'];
                $karma_point =$c['karma'];
                $loot = $c['exp_loot'];
            }

        }
        elseif ($_POST['ennemie'] == 'Nagamasa Azai') {

            $health_statement = $mysqlConnection2->prepare('SELECT * FROM `ennemy_table` WHERE `id_ennemy`=3');
            $health_statement->execute();
            $c = $health_statement->fetchAll();

            foreach ($c as $c) {
                $name = $c['name_ennemy'];
                $image = $c['path_to_image'];
                $health_point = $c['health'];
                $technical_point =$c['technical'];
                $attack_point = $c['attack'];
                $defense_point =$c['defense'];
                $agility_point =$c['agility'];
                $karma_point =$c['karma'];
                $loot = $c['exp_loot'];
            }

        }
        elseif ($_POST['ennemie'] == 'Oda Nobunaga') {

            $health_statement = $mysqlConnection2->prepare('SELECT * FROM `ennemy_table` WHERE `id_ennemy`=4');
            $health_statement->execute();
            $c = $health_statement->fetchAll();

            foreach ($c as $c) {
                $name = $c['name_ennemy'];
                $image = $c['path_to_image'];
                $health_point = $c['health'];
                $technical_point =$c['technical'];
                $attack_point = $c['attack'];
                $defense_point =$c['defense'];
                $agility_point =$c['agility'];
                $karma_point =$c['karma'];
                $loot = $c['exp_loot'];
            }

        }

    ?>

    <div>

        <div class="horizontal_bar">
            <!--Creation du graphique 2-->
            <div class="image_class">
                <img src='<?=$image?>' class = "image"/>
            </div>
            
            <div class="chart1">
                <canvas id="myChart3"></canvas>
            </div>
        </div>

    </div>


    <script>
        var ctx = document.getElementById('myChart3').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'horizontalBar',

        // The data for our dataset
        data: {
                labels: ["Health Point",
                        "Technical Point",
                        "Attack Point",
                        "Defense Point",
                        "Agility Point",
                        "Karma Point"],

                datasets: [{
                label: '<?=$name?>',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                data: ['<?=$health_point?>', '<?=$technical_point?>', '<?=$attack_point?>', '<?=$defense_point?>', '<?=$agility_point?>', '<?=$karma_point?>'],
            }]
            },
            // Configuration options go here
            options: {

            }

        });
    </script>
    

</body>


</html>