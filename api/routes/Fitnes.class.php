<?php

Flight::route('POST /fitnes/send', function(){
    $data=Flight::request()->data->getData();
    Flight::Fitnes()->add_fitnes($data);
    Flight::json(["message" => "Message sent!"]);
});

Flight::route('GET /fitnes/get', function(){
  Flight::json(Flight::Fitnes()->get());
});

?>