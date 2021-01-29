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

        include_once 'Shawarma.php';
        include_once 'ShawarmaPro.php';
        include_once 'SmallSize.php';
        include_once 'BigSize.php';

        include_once 'Composite.php';
        include_once 'MenuFacade.php';

        echo '<br/>';
        
        // // делегирование 

        // $burger1 = new Dish('hamburger', 149);
        // $burger2 = new Dish('cheeseburger', 99, 222);
        // $cola = new Drink('cola',70);
        // $tea = new Drink('tea',30, 100);
        // $coffee = new Drink('coffee',150, 300);
        
        // echo 'Burger(149) getInfo() <br/>';
        // echo $burger1->getInfo();
        // echo '<br/><br/>';

        // echo 'Burger(99, 222) getInfo() <br/>';
        // echo $burger2->getInfo();
        // echo '<br/><br/>';

        // echo 'Drink(70) getInfo() <br/>';
        // echo $cola->getInfo();
        // echo '<br/><br/>';

        // echo 'Drink(30, 100) getInfo() <br/>';
        // echo $tea->getInfo();
        // echo '<br/><br/>';

        // echo 'Drink(50, 300) getInfo() <br/>';
        // echo $coffee->getInfo();
        // echo '<br/><br/>';

        // proxy

        $paymentDevice = new PaymentDevice();
        $paymentDeviceProxy = new PaymentDeviceProxy($paymentDevice);
        echo $paymentDeviceProxy->doPayment(500);
        echo '<br/><br/>';

        echo $paymentDeviceProxy->doPayment(1500);
        echo '<br/><br/>';

        // Адаптер

        $payment = new PaymentinDollars(32);
        $adapter = new PaymentDeviceAdapter($paymentDevice, $payment);
        echo $adapter->doPayment();
        echo '<br/><br/>';

        // // Декоратор

        // $ice = new Ice($cola);
        // echo $ice->getInfo();
        // echo '<br/><br/>';

        // $parmesan = new Cheese($burger1, 50);
        // echo $parmesan->getInfo();
        // echo '<br/><br/>';

        // $ceaser = new Sauce($burger2, 30);
        // echo $ceaser->getInfo();
        // echo '<br/><br/>';

        // // bridge

        // $type = new BigSize();
        // $small = new SmallSize();

        // $shawarma1 = new Shawarma($type, 'usual shawarma');
        // $shawarma2 = new ShawarmaPro($type, 'big mushroom shawarma');
        // $shawarma3 = new ShawarmaPro($small, 'small mushroom shawarma');

        // $shawarma1->getSize();
        // $shawarma1->getTimetoReady();
        // echo '<br/>';

        // $shawarma2->getSize();
        // $shawarma2->getTimetoReady();
        // $shawarma2->addComponent();
        // echo '<br/>';

        // $shawarma3->getSize();
        // $shawarma3->getTimetoReady();
        // $shawarma3->addComponent();
        // echo '<br/>';

        // // компоновщик

        // $composite = new Composite();
        // $composite->add($burger1);
        // $composite->add($burger2);
        // $composite->add($cola);
        // $composite->add($tea);
        // $composite->add($coffee);
        // $composite->add($ice);
        // $composite->add($parmesan);
        // $composite->add($ceaser);
        // $composite->add($shawarma1);
        // $composite->add($shawarma2);
        // $composite->add($shawarma3);
        // // $composite->getInfo();

        // // фасад

        // $menu = new MenuFacade();
        // $menu->setComposite($composite);
        // $menu->composite->getInfo();
        // $menu->listMenu['tasty'] = $burger2;
        // echo '<br/>';
        // echo $menu->listMenu['tasty']->getInfo();
        
        /*
        include_once 'SFPizza.php';
        include_once 'SFPepperoni.php';
        include_once 'SFMargaret.php';
        include_once 'SFSpicy.php';

        include_once 'AFPepperoni.php';
        include_once 'AFMargaret.php';

        include_once 'PPepperoni.php';
        include_once 'PMargaret.php';

        include_once 'Order.php';
        include_once 'Seller.php';
        include_once 'ICombo.php';

        // простая фабрика

        $pizzaFactory = new SFPizza;
        $pizza1 = $pizzaFactory->createPizza('Pepperoni', 30);
        $pizza2 = $pizzaFactory->createPizza('Margaret', 40);
        $pizza3 = $pizzaFactory->createPizza('Spicy', 20);

        $pizza1->printInfo();
        $pizza2->printInfo();
        $pizza3->printInfo();

        //абстрактная фабрика

        $abstarctPizzaFactory1 = new AFPepperoni();
        $pizza1 = $abstarctPizzaFactory1->createPizza();
        $pizza1->printInfo();

        $abstarctPizzaFactory2 = new AFMargaret();
        $pizza2 = $abstarctPizzaFactory2->createPizza();
        $pizza2->printInfo();

        // прототип

        $protPepperoni = new PPepperoni();
        $clonePepperoni = $protPepperoni->clonePizza();

        $protMargaret = new PMargaret();
        $cloneMargaret = $protMargaret->clonePizza();

        $protMargaret->getInfo();
        $cloneMargaret->getInfo();
        $protPepperoni->getInfo();
        $clonePepperoni->getInfo();

        // строитель
        echo '<br/>';
        $maria = new Seller();

        $maria->setCombo(new ICombo());

        $firstOrder = $maria->getParty();
        $secondOrder = $maria->getSolo();
        $thirdOrder = $maria->getForKids();

        $firstOrder->printOrderList();
        $secondOrder->printOrderList();
        $thirdOrder->printOrderList();
        */

        // include_once 'Cook.php';
        
        // // состояние

        // $John = new Cook();

        // $John->cooking();
        // $John->stopCooking();   
        // $John->offStove(); 
        // $John->onStove();
        // $John->cooking();
        // $John->onStove();
        // $John->cooking();
        // $John->stopCooking();
        // $John->cooking();
        // $John->onStove();
        // $John->stopCooking();
        // $John->offStove();
    
    ?>

</body>
</html> 