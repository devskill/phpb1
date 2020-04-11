<?php

class FileSystemEngine {
    public $home;

    public function __construct(){
        $this->home = getcwd();
    }

    public function moveTo($directoryToGo){
        if(chdir($directoryToGo)){
            $this->home = getcwd();
        }
    }

    public function moveUp(){
        $this->moveTo("..");
    }

    public function getItems(){
        $result = [];
        $directory = dir($this->home);
        while (false !== ($entry = $directory->read())) {
            if(is_dir($entry)){
                $type = "Directory";
                if($entry[0] !== '.')
                    $size = 0;// getSize($entry);
                else
                    $size = 0;
            } else {
                $type = "File";
                $size = filesize($entry);
            }
            
            $time = date(DATE_ATOM, fileatime($entry));
            $result[] = ["Name" => $entry, "Type" => $type, "Size" => $size, "Time" => $time];
        }
        $directory->close();
        return $result;
    }

    private function getSize($path){
        $d = dir($path);
        $size = 0;
        while (false !== ($entry = $d->read())) {
            if(is_dir($entry)){
                if($entry[0] !== '.')
                    $size = getSize($entry);
                else
                    $size += 0;
            } else {
                $size += filesize($entry);
            }
        }
        $d->close();
        return $size;
    }
}

abstract class DirectoryPrinter{
    abstract function printDirectory($result);
    abstract function printHome($home);
    abstract function printOptions();
}

class ConsoleDirectoryPrinter extends DirectoryPrinter{
    function printDirectory($result){
        foreach($result as $item){
            foreach($item as $name => $value){
                echo $value . "\t";
            }
            echo "\n";
        }
    }
    function printHome($home){
        echo $home . "\n";
    }
    function printOptions(){
        echo "1. View Files & Folders\n";
        echo "2. Go Inside a Folder (have to provide the folder name in current directory.\n";
        echo "3. Go Up\n";
        echo "4. Create a File\n";
        echo "5. Write into a file\n";
        echo "6. View a file\n";
        echo "7. Delete a file\n";
        echo "8. Delete current directory/folder\n";
        echo "9. Exit\n";
    }
}

// $test = new FileSystemEngine();
// //$test->moveUp();
// $r = $test->getItems();
// $printer = new ConsoleDirectoryPrinter();
// //$printer->printDirectory($r);


// $x = getcwd();
// echo $x . "\n";
// $y = chdir("..");
// $z = getcwd();
// echo $z . "\n";
