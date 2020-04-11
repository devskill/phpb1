<?php
require_once("file4.php");

class FileSystemProgram{
    protected $fileSystemEngine;
    protected $printer;

    public function __construct(){
        $this->fileSystemEngine = new FileSystemEngine();
        $this->printer = new ConsoleDirectoryPrinter();
    }
    
    private function printOptions(){
        $this->printer->printOptions();
    }

    public function start(){
        while(true){
            $this->printOptions();
            $exit = $this->inputOption();
            if($exit == "exit")
                break;
        }
    }

    protected function executeOption1(){
        $result = $this->fileSystemEngine->getItems();
        $this->printer->printDirectory($result);
    }

    protected function executeOption2(){
        $fileName = readline();
        $this->fileSystemEngine->moveTo($fileName);
        $this->printer->printHome($this->fileSystemEngine->home);
    }

    protected function executeOption3(){
        $this->fileSystemEngine->moveUp();
        $this->printer->printHome($this->fileSystemEngine->home);
    }

    private function inputOption(){
        $option = readline();
        if($option == "9")
            return "exit";
        else if($option == "1"){
            $this->executeOption1();
        }else if ($option == "2"){
            $this->executeOption2();
        } else if($option == "3"){
            $this->executeOption3();
        }
    }
}

$file = new FileSystemProgram();
$file->start();
