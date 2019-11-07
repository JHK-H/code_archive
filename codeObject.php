<?php

    class Code {

        public $headline;
        public $description;
        public $code;
        public $tags;

        private $connectionController;

        // public function  __construct($headline, $description, $code, $tags, $avainsana) {
        //     $this->headline = $headline;
        //     $this->description = $description;
        //     $this->code = $code;
        //     $this->tags = $tags;
        // }

        

        public function printInformations() {
            echo "headline = " . $this->headline . "<br>" . 
            "description = <q>" . $this->description . "</q><br>" . 
            "code = <q>" . $this->code . "</q><br>" .
            "tags = <q>" . $this->tags . "</q><br>";
        }

        public function createConnetionToDatabase() {
            //Referenssi tietokantaan
            include("connectionController.php");
    
            //otetaan yhteys tietokantaan
            $this->connectionController = new Controller();
        }
    
        public function getAllCodes() {
            return $this->connectionController->executeSearchStatement("select * from code");
        }

        public function addCode() {
            return $this->connectionController->executeSearchStatement("insert into code(headline, description, code, tags) values (?, ?, ?, ?)",
            array($this->headline, $this->description, $this->code, $this->tags));
        }

        public function searchWithKeyword($keyword) {
            // echo $keyword;
            return $this->connectionController->executeSearchStatement("select * FROM code 
            WHERE tags LIKE '%{$keyword}%' 
            OR code LIKE '%{$keyword}%'
            OR headline LIKE '%{$keyword}%'
            OR description LIKE '%{$keyword}%'");
        }
        // ("select * from linkit where = '{$keyword}'");
        // WHERE code LIKE '%{$keyword}%'
        public function setHeadline($headline)
            {$this->headline = $headline;
                }
  
        public function setDescription($description)
        {
                $this->description = $description;
        }

        public function setCode($code)
        {
                $this->code = $code;
        }

        public function setTags($tags)
        {
                $this->tags = $tags;
        }
    }

?>