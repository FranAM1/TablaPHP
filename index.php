<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <style>
        table {
            width: 75%;
            text-align: center;
            border: solid red 2px;
            border-collapse: collapse;
        }
        th, td{
            border-bottom: solid 2px red;
        }
        th{
            background-color: pink;
        }
    </style>
</head>
<body>
    <table>    
        <tr>
            <th>Fila</th>
            <th>Contenido de $var</th>
            <th>isset($var)</th>
            <th>empty($var)</th>
            <th>(bool) $var</th>
            <th>isnull($var)</th>
        </tr>
        <tr>
            <td><?php rowsCount()?></td>
            <td>$var = null</td>
            <td>
                <?php 
                    $var = null;
                    typeTester("isset",$var);
                ?></td>
            <td>
                <?php 
                    $var = null;
                    typeTester("empty",$var);
                ?>
            </td>
            <td>
                <?php 
                    $var = null;
                    typeTester("bool",$var);
                ?>
            </td>
            <td>
                <?php 
                    $var = null;
                    typeTester("isnull",$var);
                ?>
            </td>
        </tr>
        <tr>
            <td><?php rowsCount()?></td>
            <td>$var = 0</td>
            <td>
                <?php 
                    $var = 0;
                    typeTester("isset",$var);
                ?></td>
            <td>
                <?php 
                    $var = 0;
                    typeTester("empty",$var);
                ?>
            </td>
            <td>
                <?php 
                    $var = 0;
                    typeTester("bool",$var);
                ?>
            </td>
            <td>
                <?php 
                    $var = 0;
                    typeTester("isnull",$var);
                ?>
            </td>
        </tr>
        <tr>
            <td><?php rowsCount()?></td>
            <td>$var = true</td>
            <td>
                <?php 
                    $var = true;
                    typeTester("isset",$var);
                ?></td>
            <td>
                <?php 
                    $var = true;
                    typeTester("empty",$var);
                ?>
            </td>
            <td>
                <?php 
                    $var = true;
                    typeTester("bool",$var);
                ?>
            </td>
            <td>
                <?php 
                    $var = true;
                    typeTester("isnull",$var);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
    function typeTester($casting, $var){
        switch($casting){
            case $casting == "isset":
                $answer = isset($var);
                break;
            case $casting == "empty":
                $answer = empty($var);
                break;
            case $casting == "bool":
                $answer = (bool)$var;
                break;
            case $casting == "isnull":
                $answer = is_null($var);
                break;
        }

        if($answer){
            echo "true";
        }else{
            echo "false";
        }

    }


    function rowsCount(){
       static $row = 1;
       echo $row++; 
    }