<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div id="headertext"><p>Restaurant Wen Chow</p></div>
    <div id="blokje">
        <div class="text">
            <div id="hoofdtext"><p>Artikel Toevoegen</p></div>
            <form action = "update.php" method = "post" id="factuur">
                    <label>Id: </label>
                    <input type="text" name="Id" id="id1" placeholder="" class="invulveld" >
                    <br />
                    <label>Naam in het Nederlands: </label>
                    <input type="text" name="NaamNL" id="naamnl" class="invulveld">
                    <br />
                    <label>Naam in het Chinees: </label>
                    <input type="text" name="NaamCH" id="naamch" class="invulveld">
                    <br />
                    <label>Prijs in euro: </label>
                    <input type="text" name="Prijs" id="prijs" class="invulveld">
                    <br />
                    <label>Allergie info: </label>
                    <input type="text" name="Allergieinfo" id="allergieinfo" class="invulveld">
                    <br />
                    <label>Naam verwerker: </label>
                    <input type="text" name="Verwerker" id="verwerker" class="invulveld">
                    <br />
                    <input type = "submit" value ="Verstuur" name = "submit" id="submit"/>
            </form>
        </div>
    </div>
    <div id="producten" class="text"><a href="producten.php">Bekijk producten</a></div>
</body>
</html>
