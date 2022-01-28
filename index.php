<!-- create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

    <?php
        class Movie {

            public $title;

            public $genre;

            public $director;

            public $year;

            public function __construct($_title, $_director) {
                $this->title = $_title;
                $this->director = $_director;
            }

            public function getTitleAndGenre() {
                return $this->title . ' genere:' . $this->genre;
            }
        }

        $i_am_legend = new Movie('Io sono leggenda', 'Francis Lawrence');
        $i_am_legend->year = 2008;
        $i_am_legend->genre = 'Azione';
       
        $troy = new Movie('Troy', ' Wolfgang Petersen');
        $troy->year = 2004;
        $troy->genre = 'Azione';

        $interstellar = new Movie('Interstellar', 'Christopher Nolan');
        $interstellar->year = 2014;
        $interstellar->genre = 'Fanstascienza';

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie</title>
    </head>
    <body>
        <h2>MOVIE</h2>
        <!-- Single Movie -->
        <div class="single-movie">
            <ul>
                <li><h3><?php echo $i_am_legend->title; ?> </h3></li>
                <li><?php echo $i_am_legend->year; ?></li>
                <li><?php echo $i_am_legend->genre; ?></li>
                <li><?php echo $i_am_legend->director; ?></li>
                <li>Titolo: <?php $i_am_legend->getTitleAndGenre(); ?></li>
            </ul>
        </div>

        <!-- Single Movie -->
        <div class="single-movie">
            <ul>
                <li><h3> <?php echo $troy->title; ?> </h3></li>
                <li><?php echo $troy->year ?></li>
                <li><?php echo $troy->genre; ?></li> 
                <li><?php echo $troy->director; ?></li>
                <li>Titolo: <?php echo $troy->getTitleAndGenre(); ?></li>
            </ul>
        </div>

        <!-- Single Movie -->
        <div class="single-movie">
            <ul>
                <li><h3><?php echo $interstellar->title; ?> </h3></li>
                <li><?php echo $interstellar->year ?></li>
                <li><?php echo $interstellar->genre; ?></li>
                <li><?php echo $interstellar->director; ?></li>
                <li>Titolo: <?php echo $interstellar->getTitleAndGenre(); ?></li>
            </ul>
        </div>
    </body>
    </html>