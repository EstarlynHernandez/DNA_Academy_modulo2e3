<?php

namespace php\PhpExercise;

use php\Class\Event\Conference;
use php\Class\Geometry\Cerchio;
use php\Class\Hotel\Client;
use php\Class\Hotel\Reservation;
use php\Class\Hotel\Room;
use php\Class\Product\Bill;
use php\Class\Product\FoodProduct;
use php\Class\User\Administrator;
use php\Class\User\User;
use php\Class\Zoo\Bird;
use php\Class\Zoo\Mammal;
use php\Class\Zoo\Reptile;
use php\Decorator\Dati\PacchettoCifrato;
use php\Decorator\Dati\PacchettoCompresso;
use php\Decorator\Dati\PacchettoConFirmaDigitale;
use php\Decorator\Geometry\FormaConOmbra;
use php\Facade\MeteoFacade;
use php\Factory\FoodAndDrink\DrinkFactory;
use php\Factory\Geometria\FormaFactory;
use php\Http\Config\EmailSender;
use php\Http\Config\SessionManager;
use php\Http\Weather\OpenMeteo;
use php\Http\Weather\OpenWeather;
use php\Http\Weather\WeatherApi;
use php\Facade\DatabaseFacade;
use php\Class\PacchettiDatiSemplici;
use php\Interface\PacchettoDati;

class OPPExercise
{
    public static function Execute()
    {
//        //Biblioteca
//        $autore = new Autore('Mario', 'Silente', 45);
//        $libro1 = new Libro('La ultima', $autore, 120);
//        $libro2 = new Libro('La prima', $autore, 20);
//        $libro3 = new Libro('La seconda', $autore, 100);
//        $biblioteca = new Biblioteca([$libro1, $libro2, $libro3]);
//
//        $biblioteca->rimuoviLibro('La ultima');
//        $biblioteca->aggiungiLibro($libro1);
//        var_dump($biblioteca);

//        //Geometria
//        $cerchio = new Cerchio();
//        $triangolo = new Triangolo();
//
//        $cerchio->raggio = 5;
//        echo $cerchio->area() . "\n";
//        echo $cerchio->perimetro() . "\n";
//
//        $triangolo->lato = 7;
//        $triangolo->base = 7;
//        $triangolo->altezza = 3;
//
//        echo $triangolo->area();
//        echo $triangolo->perimetro();

//        //public api
//        echo count(http::get('https://fakestoreapi.com/products'));
//        var_dump(http::get('https://fakestoreapi.com/products/7')) . "\n";
//

//        //Veicoli
//        $auto = VeicoliFactory::create('auto');
//        var_dump($auto);
//

//        //UI Sistemi Operativi
//        $mac = UIFactory::create('windows');
//        $mac->pain('blue');
//
//        echo $mac->click();

//        // Singleton Config
//        $config1 = Config::getInstance();
//        $config2 = Config::getInstance();
//
//        $config2->setDbUser('newUser');
//        echo $config1->getDbUser();

//        // Logger
//        $log = Logger::getInstance();
//        $newLog = Logger::getInstance();
//        $log->setLogFile('log/newLog');
//        $log->setLogMessage("App complete");
//        echo $newLog->getLogMessage();
//
//        if ($log === $newLog) {
//            echo 'uguali';
//        }

//        // Databases
//        $DB = DB::getInstance();
//        print_r($DB->query("SELECT * FROM errors"));
//

//        //Logger Factory
//        $logger = new LoggerFacade();
//        $logger->writeError('error 1775');
//

//        //File Functions
//        var_dump(File::make('log', 'Nuovo messaggio'));
//        var_dump(File::exist('log'));
//        var_dump(File::read('log'));

//        //Products
//        $product = new FoodProduct(27, 'product 1');
//        $product2 = new FoodProduct(35, 'product 2');
//        $product3 = new FoodProduct(80, 'product 3');
//
//        $bill = new Bill();
//        $bill->addProduct($product);
//        $bill->addProduct($product2);
//        $bill->addProduct($product3);
//
//        var_dump($bill->bill());

//        //Zoo
//        $bird = new Bird('semi', 'pettirosso', 'pettirosso');
//        $mammifero = new Mammal('erba', 'mucca', 'mucca');
//        $reptile = new Reptile('piccoli animali', 'serpe', 'serpe');
//
//        echo $bird->fly() . "\n";
//        echo $mammifero->run() . "\n";
//        echo $reptile->run() . "\n";

//        //User
//        $user = new Administrator('adminEmail', 'admin', 'adminPassword');
//        echo $user->getPost();
//

//        //Hotel
//        $client1 = new Client("client 1", 'land');
//        $client2 = new Client("client 2", 'land');
//        $camera1 = new Room('Stanza 1', 'San Francesco');
//        $camera2 = new Room('Stanza 2', 'San Francesco');
//
//        $reservation = new Reservation($client1, $camera1);
//        $reservation2 = new Reservation($client2, $camera1);
//        var_dump($reservation);
//        var_dump($reservation2);

//        //Event
//        $event = new Conference(['Di cosa e la Conferenza?'], 'Risposte', "Napoli", new \DateTime());
//        var_dump($event->getHour());
//        $event->addQuestions('Come fare le domande');
//        var_dump($event->getQuestions());

//        //Drink
//        $drink = new DrinkFactory();
//        $coffee = $drink->getDrink('caffeAmericano');
//        $te = $drink->getDrink('te');
//
//        var_dump($coffee);
//        var_dump($te);

//        //Forma Geometrica
//        $forma = FormaFactory::getGeometricForm('sfera');
//
//        var_dump($forma);

//        //Session Manager
//        $session = SessionManager::getInstance();
//        $session->setData('user', 'me');
//        $session->destroySession();
//        echo $session->getData('user');
//        $session->destroyData('user');
//        echo $session->getData('user');

//        //Weather
//        $meteo = new MeteoFacade();
//        echo $meteo->getMeteo() . "\n";
//        echo $meteo->getTemperature() . "\n";

//        //Databases Facade
//        $databases = new DatabaseFacade();
//        echo $databases->eseguiQuery('USE test') . "\n";
//        echo $databases->chiudiConnessione() . "\n";
//        echo $databases->eseguiQuery('SELECT * FROM product') . "\n";

//        //Mail Sender
//        $message = "
//            <h1>Questo e il messaggio Di test di HTML in PHP come mail</h1>
//            <p style='color: brown'>Test completato con esito</p>
//            <p style='color: blue'>Test completato con esito</p>
//            <p style='color: green; text-align: center; font-weight: bold '>Test completato con esito</p>
//        ";
//        EmailSender::send('', $message);

//        //Forme Decorator
//        $cerchio = new Cerchio(7);
//        $cerchioOmbra = new FormaConOmbra($cerchio);
//        var_dump($cerchioOmbra);
//
//        //Dati Decorator
//        $semplici = new PacchettiDatiSemplici();
//        $cifrati = new PacchettoCifrato($semplici);
//        $compressi = new PacchettoCompresso($cifrati);
//        $firmati = new PacchettoConFirmaDigitale($compressi);
//        $semplici->scriviDatti('here', 'Questo e un dato salvato');
//        echo $semplici->leggiDati('here') . "\n";
//        $cifrati->scriviDatti('here', 'Questo e un dato cifrato salvato');
//        echo $cifrati->leggiDati('here') . "\n";
//        $compressi->scriviDatti('here', 'Questo e un dato cifrato e compresso, salvato');
//        echo $compressi->leggiDati('here') . "\n";
//        $firmati->scriviDatti('here', 'Questo e un dato cifrato e compresso che dovevo ma non ho firmare, salvato');
//        echo $firmati->leggiDati('here') . "\n";
    }
}