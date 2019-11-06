<?php

class Controller {

    //Tietokantayhteys talletetaan tähän ominaisuuteen
    private $connection;

    //Tietokannan tiedot talletettu tähän ominaisuuteen
    private $configuration;

    public function __construct($configuration = 'connectionConfiguration.ini') {
        $this->configuration = $configuration;
    }
    //avaa tietokantayhteyden
    private function openConnection() {
        //purkaa ini-tiedoston taulukoksi
        $init = parse_ini_file($this->configuration, true);

        //alustetaan tietokannan avaamiseen liittyvät ominaisuudet
        $type = $init['database']['type'];
        $host = $init['database']['host'];
        $port = $init['database']['port'];
        $database = $init['database']['database'];
        $username = $init['database']['username'];
        $password = $init['database']['password'];
        $url = "{$type}:host={$host};port={$port};dbname={$database}";
        
        // try-lohkoon tulee se koodi, joka voi aiheuttaa kriittisen virheen
        // ja catch-lohkoon hypätään jos tulee virhe
        try{
            //Luo yhteys tietokantaan PDO-olion avulla
            $this->connection = new PDO($url, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            //palauttaa tietokantayhteyden
            return $this->connection;
        }catch(PDOException $e){
            // Tänne hypätään jos tulee virhe
            echo $e->getMessage;
            // siirrytään virhesivulle
            header("location: error.php");
        }

    }
    //suorittaa sql-kyselyitä
    public function executeSearchStatement($sqlQuery, $parameterTable = array()) {

        $this->openConnection();
        //valmistellaan hakukysely
        $executableStatement = $this->connection->prepare($sqlQuery);
        // liittetään parametritaulukon arvot merkityn parametrin tilalle
        // ja suoritetaan kysely
        $executableStatement->execute($parameterTable);
        //haetaan tulostaulukko ja suljetaan yhteys
        $resultgroup = $executableStatement->fetchAll(PDO::FETCH_ASSOC);
        //suljetaan yhteys
        $this->closeConnection();
        //palautetaan tulosjoukko
        return $resultgroup;
    }

    //Metodia kutsutaan kun suoritetaan lisäys (isert), poisto (delete)
    //tai päivitys (update)
    public function executeUpdateStatement($sqlQuery, $parameterTable = Array()) {
        echo $sqlQuery;
        $this->openConnection();

        try{
            //valmistellaan sql-lause
            $executedQuery = $this->connection->prepare($sqlQuery);
            //suoritetaan SQL-lause palvelimella
            $executedQuery->execute($parameterTable);

            //Palauta tietueiden määrä (0 = ei tietueita)
            $count = $executedQuery->rowCount();
            //echo $lkm;
            //suljetaan yhteys
            $this->closeConnection();
        }
        catch(PDOException $e){
            // Jos tuli virhe asetetaan tietueiden määrä nollaksi
            $count = 0;
            echo $e->getMessage;
        }
        //Palautetaan tietueiden määrä
        return $count;
    }

    private function closeConnection() {
        $this->connection = null;
    }
}