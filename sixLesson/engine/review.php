<?php

function addReview($name, $text, $id) {
    $date = Date("H:i d.m.Y");
    $query = "INSERT INTO reviews (name, text, date, productID) VALUES ('$name', '$text', '$date', '$id')";
    return execute($query);
}

?>