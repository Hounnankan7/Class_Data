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

    <!-- FORMULAIRE -->
    <h3 class="formulaire_title"> CHOOSE THE ENNEMIE YOU WANT TO SEE</h3>
    <form method="post" action="traitement2.php">
        <div class="formulaire_all">
            <p style="margin-right: 20px;">
                <input list="ennemie" name="ennemie">
                <datalist id="ennemie">
                    <option value="Kenshin Uesugi">
                    <option value="Motochika Chosokabe">
                    <option value="Nagamasa Azai">
                        <option value="Oda Nobunaga">
                </datalist>
            </p>
        </div>
        <p><input type="submit" value="See Information" /></p>
    </form>
    

</body>


</html>