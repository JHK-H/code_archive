<?php

    class Code {

        public $id;
        public $title;
        public $description;
        public $code;
        public $tags;
        public $comments;

        private $connectionController;

        public function printInformations() {
            echo "id = " . $this->id ."<br>" . 
            "title = " . $this->title . "<br>" . 
            "description = <q>" . $this->description . "</q><br>" . 
            "code = <q>" . $this->code . "</q><br>" .
            "tags = <q>" . $this->tags . "</q><br>",
            "comments = <q>" . $this->comments . "</q><br>";
        }

        public function createConnetionToDatabase() {
            //Referenssi tietokantaan
            include("connectionController.php");
    
            //otetaan yhteys tietokantaan
            $this->connectionController = new Controller();
        }
    
        public function getAllCodes() {
            return $this->connectionController->executeSearchStatement("select * from scripts");
        }

        public function addCode() {
            return $this->connectionController->executeSearchStatement("insert into scripts(title, description, code, tags, comments) values (?, ?, ?, ?, ?)",
            array($this->title, $this->description, $this->code, $this->tags, $this->comments));
        }

        public function searchWithKeyword($keyword) {
            return $this->connectionController->executeSearchStatement("select * FROM scripts 
            WHERE tags LIKE '%{$keyword}%' 
            OR code LIKE '%{$keyword}%'
            OR title LIKE '%{$keyword}%'
            OR description LIKE '%{$keyword}%'");
        }
        
        public function setTitle($title)
        {
                $this->title = $title;
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
        public function setComments($comments)
        {
                $this->comments = $comments;
        }
    }

?>