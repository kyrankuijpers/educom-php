<?php

    function divide($dividend, $divisor) {
        if($divisor == 0) {
        throw new Exception("destroyed quantum mechanics");
        }
        return $dividend / $divisor;
    }
    


    try{
        echo divide(5, 0);
    } catch(Exception $exception){
        //echo $exception;
        $code = $exception->getCode();
        $message = $exception->getMessage();
        $file = $exception->getFile();
        $line = $exception->getLine();
        echo "Exception thrown in $file on line $line: [Code $code]
        $message";
    } finally{
        echo "cry and eat Ben and Jerries";
    }
?>