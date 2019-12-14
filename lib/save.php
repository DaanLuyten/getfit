<?php
require_once "autoload.php";
var_dump($_POST);

$tablename = $_POST["tablename"];
$formname = $_POST["formname"];
$afterinsert = $_POST["afterinsert"];
$pkey = $_POST["pkey"];

if ($_POST["savebutton"] == "Save") {
    $sql_body = array();

    //key-value pairs samenstellen
    foreach ($_POST as $field => $value) {
        if (in_array($field, array("tablename", "formname", "afterinsert", "pkey", "savebutton", $pkey))) continue;

        $sql_body[] = " $field = '" . htmlentities($value, ENT_QUOTES) . "' ";
    }

    if ($_POST[$pkey] > 0) //update
    {
        $sql = "UPDATE $tablename SET " . implode(", ", $sql_body) . " WHERE $pkey=" . $_POST[$pkey];
        if (ExecuteSQL($sql)) $new_url = "/dag2/$formname.php?id=" . $_POST[$pkey] . "&updateOK=true";
    } else //insert
    {
        $sql = "INSERT INTO $tablename SET " . implode(", ", $sql_body);
        if (ExecuteSQL($sql)) $new_url = "/dag2/$afterinsert?insertOK=true";
    }

    print $sql;
    header("Location: $new_url");
}


//if ( $_POST["savebutton"] == "Save" )
//{
//    $sql_body = array();
//
//    foreach( $_POST as $field => $value )
//    {
//        if ( $field <> "exe_id" AND $field <> "savebutton" )
//        {
//            $sql_body[]  = " $field = '" . htmlentities($value, ENT_QUOTES) . "' " ;
//        }
//    }
//
//    $sql .= "UPDATE exercises SET " . implode( ", " , $sql_body ) . " WHERE exe_id=" . $_POST["exe_id"];
//    echo $sql;
//
//    GetData($sql);
//}
//?>