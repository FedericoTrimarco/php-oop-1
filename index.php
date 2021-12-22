<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
    class Movie {
        public $title;
        public $movieDirector;
        public $starActor;
        public $year;

        function __construct($title,$movieDirector,$starActor,$year) {
            $this->title = $title;
            $this->movieDirector = $movieDirector;
            $this->starActor = $starActor;
            $this->year = $year;
        }

    };

    $movie1 = new Movie('Spider-Man', 'Sam Raimi', 'Tobey Maguire', 2002 );
    var_dump($movie1);

    echo '<hr>';

    $movie2 = new Movie('Hurricane', 'Norman Jewison', 'Denzel Washington', 1999 );
    var_dump($movie2);

    echo '<hr>';

    $movie3 = new Movie('Spider-Man: No Way Home', 'Jon Watts', 'Tom Holland', 2021 );
    var_dump($movie3);
?>