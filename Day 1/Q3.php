<?php
$numberPlate = array("",""," ","0","0","1"," ","A","A"," ");

function prodSecondLetter($numberPlate)
{
    for ($i = 65; $i <= 90; $i++) {
        $numberPlate[1] = chr($i);
    }
};

function prodFirstLetter($numberPlate)
{
    for ($i = 0; $i <= 10; $i++) {
        for ($i = 65; $i <= 90; $i++) {
            $numberPlate[0] = chr($i);
            prodSecondLetter($numberPlate);
        };
    };
}

prodFirstLetter($numberPlate);

?>