<?php

function orderCreate($user, $name, $email, $phone, $address) {
    $name = mysqliEscapeString($name);
    $phone = mysqliEscapeString($phone);
    $address = mysqliEscapeString($address);
    $email = mysqliEscapeString($email);

    $products = getAllProducts(md5($user['id']));

    if(!$products) {
        return redirect('/');
    }

    foreach ($products as $product) {
        unset($product['name']);
        unset($product['image']);
        $productsString .= implode('/', $product);
        $productsString .= '|';
    }

    removeAllFromCart(md5($user['id']));

    return execute("INSERT INTO orders(
                date,
                userID,
                name,
                email,
                phone,
                products
            )
            VALUES(
                NOW(), '{$user['id']}', '{$name}', '{$email}', '{$phone}', '{$productsString}')");
}

?>