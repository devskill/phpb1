<?php
$home = getcwd();
$d = dir($home);
echo "Path: " . $d->path . "\n";
while (false !== ($entry = $d->read())) {
    if(is_dir($entry)){
        $type = "Directory";
        if($entry[0] !== '.')
            $size = getSize($entry);
        else
            $size = 0;
    } else {
        $type = "File";
        $size = filesize($entry);
    }
    
    $time = date(DATE_ATOM, fileatime($entry));
    echo "$entry\t\t$size byte\t$type\t$time\n";
}
$d->close();

function getSize($path){
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