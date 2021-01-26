<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        include_once 'Dish.php';
        include_once 'Drink.php';
        include_once 'PaymentDeviceProxy.php';
        include_once 'PaymentinDollars.php';
        include_once 'PaymentDeviceAdapter.php';
        include_once 'Ice.php';
        include_once 'Cheese.php';
        include_once 'Sauce.php';
        echo '<br/>';
        // делегирование 

        $burger1 = new Dish('hamburger', 149);
        $burger2 = new Dish('cheeseburger', 99, 222);
        $cola = new Drink('cola',70);
        $tea = new Drink('tea',30, 100);
        $coffee = new Drink('coffee',150, 300);
        
        echo 'Burger(149) getInfo() <br/>';
        echo $burger1->getInfo();
        echo '<br/><br/>';

        echo 'Burger(99, 222) getInfo() <br/>';
        echo $burger2->getInfo();
        echo '<br/><br/>';

        echo 'Drink(70) getInfo() <br/>';
        echo $cola->getInfo();
        echo '<br/><br/>';

        echo 'Drink(30, 100) getInfo() <br/>';
        echo $tea->getInfo();
        echo '<br/><br/>';

        echo 'Drink(50, 300) getInfo() <br/>';
        echo $coffee->getInfo();
        echo '<br/><br/>';

        // proxy

        $paymentDevice1 = new PaymentDeviceProxy();
        echo $paymentDevice1->doPayment(500);
        echo '<br/><br/>';

        echo $paymentDevice1->doPayment(1500);
        echo '<br/><br/>';

        // Адаптер

        $paymentDevice2 = new PaymentinDollars(32);
        $adapter = new PaymentDeviceAdapter($paymentDevice2);
        echo $adapter->doPayment();
        echo '<br/><br/>';

        // Декоратор

        $ice = new Ice($cola);
        echo $ice->getInfo();
        echo '<br/><br/>';

        $parmesan = new Cheese($burger1, 50);
        echo $parmesan->getInfo();
        echo '<br/><br/>';

        $ceaser = new Sauce($burger2, 30);
        echo $ceaser->getInfo();
        echo '<br/><br/>';


        

    ?>

</body>
</html> 