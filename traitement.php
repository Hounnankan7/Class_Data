<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playing Around 2 </title>
    <meta name="description" content="A simple HTML5 and data projects.">
    <meta name="hounnankan_prince_donald" content="Data about a game">

   <!-- <link rel="stylesheet" href="css/stylesheet1.css"> -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>    <!--Integration de Chart.js-->
</head>


<body>

    <header>

    </header>

    <?php 
        //character 1 stats
        $health_point1 = 0;
        $technical_point1 =0;
        $attack_point1 = 0;
        $defense_point1 =0;
        $agility_point1 =0;
        $karma_point1 =0;

        //character 2 stats
        $health_point2 = 0;
        $technical_point2 =0;
        $attack_point2 = 0;
        $defense_point2 =0;
        $agility_point2 =0;
        $karma_point2 =0;

        if ($_POST['character1'] == 'swordman1') {
            $class1 = 'Swordman';
            $health_point1 = 80;
            $technical_point1 =50;
            $attack_point1 = 50;
            $defense_point1 =60;
            $agility_point1 =80;
            $karma_point1 =100;
        }
        elseif ($_POST['character1'] == 'spearman1') {
            $class1 = 'Spearman';
            $health_point1 = 80;
            $technical_point1 =50;
            $attack_point1 = 50;
            $defense_point1 =60;
            $agility_point1 =80;
            $karma_point1 =100;
        }
        elseif ($_POST['character1'] == 'ninja1') {
            $class1 = 'Ninja';
            $health_point1 = 80;
            $technical_point1 =50;
            $attack_point1 = 50;
            $defense_point1 =60;
            $agility_point1 =80;
            $karma_point1 =100;
        }
        elseif ($_POST['character1'] == 'archer1') {
            $class1 = 'Archer';
            $health_point1 = 80;
            $technical_point1 =50;
            $attack_point1 = 50;
            $defense_point1 =60;
            $agility_point1 =80;
            $karma_point1 =100;
        }
        elseif ($_POST['character1'] == 'gunner1') {
            $class1 = 'Gunner';
            $health_point1 = 80;
            $technical_point1 =50;
            $attack_point1 = 50;
            $defense_point1 =60;
            $agility_point1 =80;
            $karma_point1 =100;
        }
        elseif ($_POST['character1'] == 'artificier1') {
            $class1 = 'Artificier';
            $health_point1 = 80;
            $technical_point1 =50;
            $attack_point1 = 50;
            $defense_point1 =60;
            $agility_point1 =80;
            $karma_point1 =100;
        }
        elseif ($_POST['character1'] == 'exorcist1') {
            $class1 = 'Exorcist';
            $health_point1 = 80;
            $technical_point1 =50;
            $attack_point1 = 50;
            $defense_point1 =60;
            $agility_point1 =80;
            $karma_point1 =100;
        }


        if ($_POST['character2'] == 'swordman2') {
            $class2 = 'Swordman';
            $health_point2 = 80;
            $technical_point2 =50;
            $attack_point2 = 50;
            $defense_point2 =60;
            $agility_point2 =80;
            $karma_point2 =30;
        }
        elseif ($_POST['character2'] == 'spearman2') {
            $class2 = 'Spearman';
            $health_point2 = 80;
            $technical_point2 =50;
            $attack_point2 = 50;
            $defense_point2 =60;
            $agility_point2 =80;
            $karma_point2 =50;
        }
        elseif ($_POST['character2'] == 'ninja2') {
            $class2 = 'Ninja';
            $health_point2 = 80;
            $technical_point2 =50;
            $attack_point2 = 50;
            $defense_point2 =60;
            $agility_point2 =80;
            $karma_point2 =40;
        }
        elseif ($_POST['character2'] == 'archer2') {
            $class2 = 'Archer';
            $health_point2 = 80;
            $technical_point2 =50;
            $attack_point2 = 50;
            $defense_point2 =60;
            $agility_point2 =80;
            $karma_point2 =20;
        }
        elseif ($_POST['character2'] == 'gunner2') {
            $class2 = 'Gunner';
            $health_point2 = 80;
            $technical_point2 =50;
            $attack_point2 = 50;
            $defense_point2 =60;
            $agility_point2 =80;
            $karma_point2 =20;
        }
        elseif ($_POST['character2'] == 'artificier2') {
            $class2 = 'Artificier';
            $health_point2 = 80;
            $technical_point2 =50;
            $attack_point2 = 50;
            $defense_point2 =60;
            $agility_point2 =80;
            $karma_point2 =100;
        }
        elseif ($_POST['character2'] == 'exorcist2') {
            $class2 = 'Exorcist';
            $health_point2 = 80;
            $technical_point2 =50;
            $attack_point2 = 50;
            $defense_point2 =60;
            $agility_point2 =80;
            $karma_point2 =100;
        }
    ?>


    <div>
         
        <button class="0"><a href="index.php">Accueil</a></button>

        
        <!--Creation du graphique-->
        <div class="chart" style=" width: 40%; height: 40%; margin: 0; padding: 0;">
            <canvas id="myChart"></canvas>
        </div>
        
        <script>
            Chart.defaults.plugins.title.display = true;
            Chart.defaults.plugins.title.text = 'PAS DE TITRE';
        </script>

        <script>
            const data = {
                labels: [
                    'Health Point',
                    'Technical Point',
                    'Attack Point',
                    'Defense Point',
                    'Agility Point',
                    'Karma Point'
                ],
                datasets: [{
                    label: '<?=$class1?>',
                    data: ['<?=$health_point1?>', '<?=$technical_point1?>', '<?=$attack_point1?>', '<?=$defense_point1?>', '<?=$agility_point1?>', '<?=$karma_point1?>'],
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }, {
                    label: '<?=$class2?>',
                    data: ['<?=$health_point2?>', '<?=$technical_point2?>', '<?=$attack_point2?>', '<?=$defense_point2?>', '<?=$agility_point2?>', '<?=$karma_point2?>'],
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
                }]
            };
        
            const config = {
                type: 'radar',
                data: data,
                options: {
                    elements: {
                    line: {
                        borderWidth: 3
                    }
                    },

                    plugins: {
                        title: {
                            text : "COMPARAISON DE DEUX CLASSES"
                        }
                    }
                },
                
            };


            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>


    </div>

</body>


</html>