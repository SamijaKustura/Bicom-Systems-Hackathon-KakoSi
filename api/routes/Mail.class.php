<?php

Flight::route('POST /mail/send', function(){
    $data=Flight::request()->data->getData();
    Flight::SendMail()->add($data);
    Flight::json(["message" => "Message sent!"]);
});

Flight::route('GET /mail/get', function(){
  Flight::json(Flight::SendMail()->get());
});

?>