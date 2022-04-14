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


    <div>
         <!-- FORMULAIRE -->
        
            <form method="post" action="traitement.php">
                <div style="display: inline-flex;">
                    <p>
                        Choose the first class :<br />
                        <input type="radio" name="character1" value="swordman1" id="swordman1" /> <label for="swordman1">Swordman</label><br />
                        <input type="radio" name="character1" value="spearman1" id="spearman1" /> <label for="spearman1">Spearman</label><br />
                        <input type="radio" name="character1" value="ninja1" id="ninja1" /> <label for="ninja1">Ninja</label><br />
                        <input type="radio" name="character1" value="archer1" id="archer1" /> <label for="archer1">Archer</label><br />
                        <input type="radio" name="character1" value="gunner1" id="gunner1" /> <label for="gunner1">Gunner</label><br />
                        <input type="radio" name="character1" value="artificier1" id="artificier1" /> <label for="artificier1">Artificier</label><br />
                        <input type="radio" name="character1" value="exorcist1" id="exorcist1" /> <label for="exorcist1">Exorcist</label><br />
                    </p>

                    <p style="margin-left: 20px;">
                        Choose the second class :<br />
                        <input type="radio" name="character2" value="swordman2" id="swordman2" /> <label for="swordman2">Swordman</label><br />
                        <input type="radio" name="character2" value="spearman2" id="spearman2" /> <label for="spearman2">Spearman</label><br />
                        <input type="radio" name="character2" value="ninja2" id="ninja2" /> <label for="ninja2">Ninja</label><br />
                        <input type="radio" name="character2" value="archer2" id="archer2" /> <label for="archer2">Archer</label><br />
                        <input type="radio" name="character2" value="gunner2" id="gunner2" /> <label for="gunner2">Gunner</label><br />
                        <input type="radio" name="character2" value="artificier2" id="artificier2" /> <label for="artificier2">Artificier</label><br />
                        <input type="radio" name="character2" value="exorcist2" id="exorcist2" /> <label for="exorcist2">Exorcist</label><br />

                    </p>
                </div>
                <p><input type="submit" value="Envoyer" /></p>
            </form>
        

        
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
                    label: 'Class 1 Stats',
                    data: [0, 0, 0, 0, 0, 0],
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }, {
                    label: 'Class 2 Stats',
                    data: [, 0, 0, 0, 0, 0],
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