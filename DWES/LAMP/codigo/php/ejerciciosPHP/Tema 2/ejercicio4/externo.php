<?php
    function array_asociativo($arrayNums){
        $arrayAsociativo = [];
        array_push($arrayAsociativo, max($arrayNums));
        array_push($arrayAsociativo, min($arrayNums));
        array_push($arrayAsociativo, array_sum($arrayNums)/count($arrayNums));
        return $arrayAsociativo;
    }
?>