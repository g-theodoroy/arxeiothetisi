<?php

isset($_GET['fakelos']) ? $fakelos = $_GET['fakelos'] : $fakelos = '' ;
isset($_GET['description']) ? $description = $_GET['description'] : $description = '' ;
isset($_GET['keep']) ? $keep = $_GET['keep'] : $keep = '' ;


$whereStr = '';
if ($fakelos) $whereStr .= " `fakelos` like '%$fakelos%' ";
if ($description){
    if ($whereStr){
        $whereStr .= " and `describe` like '%$description%' ";
    }else{
        $whereStr = " `describe` like '%$description%' ";
    }
}
if ($keep){
    if ($whereStr){
        $whereStr .= " and (`keep` like '%$keep%' or `keep_alt` like '%$keep%') ";
    }else{
        $whereStr = " `keep` like '%$keep%' or `keep_alt` like '%$keep%' ";
    }
}

 if ($whereStr) $whereStr = ' where ' . $whereStr; 

if ($whereStr){
$query = "select * from `keepvalues` $whereStr order by MID(`fakelos`,LOCATE('.',`fakelos`)+1,LENGTH(`fakelos`)-(LOCATE('.',`fakelos`)+1))+0<>0 DESC, MID(`fakelos`,LOCATE('.',`fakelos`)+1,LENGTH(`fakelos`)-(LOCATE('.',`fakelos`)+1))+0, `fakelos` ; ";
}

include 'dbinfo.inc.php';

$result = mysqli_query($link,$query);

if (!$result) {
    $errorText = mysqli_error($link);
    echo "1 $errorText<hr>";
}

$foundCount = mysqli_num_rows($result);
$found = [];
while($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
    $found[] = $row;
}

//print_r ($found);

mysqli_close($link);

require 'loadBlade.php';

// render the template file and echo it
echo $blade->make('getFindData', ['foundCount' => $foundCount, 'searchData' =>$description, 'found' => $found ])->render();

?>
