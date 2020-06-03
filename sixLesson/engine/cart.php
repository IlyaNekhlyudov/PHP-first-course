<?php

function checkProduct($userID, $productID) {
    $userID = mysqliEscapeString($userID);
    $productID = mysqliEscapeString($productID);

    $product = queryOne("SELECT productID, quantity FROM cart WHERE userHash='${userID}' AND productID='{$productID}'");
    if ($product) {
        return execute("UPDATE cart SET quantity=quantity+1 WHERE userHash='${userID}' AND productID='{$productID}'");
    } else {
        return addToCart($userID, $productID);
    }
}

function addToCart($userID, $productID) {
    cookie('cart', $userID, 60 * 60 * 24 * 30);
    $userID = mysqliEscapeString($userID);
    $productID = mysqliEscapeString($productID);
    return execute("INSERT INTO cart (productID, userHash, date) VALUES ('{$productID}', '{$userID}', NOW())");
}

function removeFromCart($userID, $productID) {
    $userID = mysqliEscapeString($userID);
    $productID = mysqliEscapeString($productID);
    return execute("DELETE FROM cart WHERE userHash = '{$userID}' AND productID = '{$productID}'");
}

function removeAllFromCart($userID) {
    $userID = mysqliEscapeString($userID);
    return execute("DELETE FROM cart WHERE userHash = '{$userID}'");
}

function quantityProducts($userID) {
    $userID = mysqliEscapeString($userID);
    return queryOne("SELECT COUNT(1) FROM cart WHERE userHash='{$userID}'");
}

function getAllProducts($userID) {
    return queryAll("SELECT
                        ps.id AS id,
                        c.quantity AS quantity,
                        ps.name AS name,
                        ps.image AS image
                    FROM
                        cart c
                    JOIN products ps ON
                        ps.id = c.productID
                    WHERE
                        c.userHash = '${userID}'");
}

?>