<?php

class Message {
    function get_error(object $e){
        /*variable $e try catch */
        return json_encode( array(
            "message" => $e -> getMessage(),
            "status" => $e -> getCode()
        ));
    }
    function get_success($data){
        return json_encode( array(
            "data" =>  $data,
            "status" => 200
        ));
    }
}