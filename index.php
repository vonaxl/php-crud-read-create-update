<!-- TODO TODAY:
REPO: php-crud-read-create-update
GOAL:
creare una pagina che stampi tutte le configurazioni presenti nel DB. Dare inoltre la possibilita' di aggiungere una nuova configurazione (titolo e descrizione) e tentare l'approccio per una update (aggiornamento di una configurazione esistente). 
BONUS:
in caso di prematura riuscita di tutto l'esercizio procedere con l'eliminazione di una configurazione esistente
N.B.: qualunque scelta di front-end sara' tollerata, bella o brutta che sia :-) -->
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
</head>
    <?php 
    
    ?>
<body>
    <div class="container">
        <div class="row pad">
            <div class="col-4">
                <div class="row">
                    <form id="myForm">
                        <label for="title">Title:</label><br>            
                        <input type="text" name="title" placeholder="Title"> <br>
                        <label for="lastname">Description:</label><br>
                        <input type="text" name="description" placeholder="Descrizione"> <br>
                        <label for="id">id(se si vuole modifcare):</label><br>
                        <input type="text" name="id" placeholder="id"> <br>
                        <input type="submit" name="action" value="invia">
                        <input id="btn" type="button" name="action" value="modifica">
                    </form>

                </div>
            </div>
            <div class="col-7">
                <div id='box' class="row ">

                </div>
            </div>
        </div>
    </div>



    <!-- template -->
    <script id="template" type="text/x-handlebars-template">

      <div class="col-10 match" data-id="{{id}}">
          <div class="opt">
              <div class="delete">x</div>
              <div class="edit">...</div>
          </div>
          <p>{{title}} </p>
          <p>{{description}} </p>
      </div>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>