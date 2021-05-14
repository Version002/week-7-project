<!doctype html>
<html lang="en">
  <head>
    <title>Task 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <?php
        require_once('libs/OrderInfo.php');
        require_once('libs/Payment.php');
        require_once('libs/Product.php');

        $orders = new OrderInfo();

        $orders->addOrder(new Product('Item 1', 5), 1, 'ABA');
        $orders->addOrder(new Product('Item 2', 3), 2, 'Wing');
        $orders->addOrder(new Product('Item 3', 4), 1, 'ABA');
        $orders->addOrder(new Product('Item 4', 5), 1, 'ABA');
        $orders->addOrder(new Product('Item 5', 6), 1, 'PiPay');
        $orders->addOrder(new Product('Item 6', 10), 1, 'ABA');
        $orders->addOrder(new Product('Item 7', 15), 1, 'Wing');
        $orders->addOrder(new Product('Item 8', 2), 1, 'Wing');

        $info = $orders->getPaymentInfo();
    ?>

    <h3 class="text-center mt-1"> Task 2: Order Info </h3>

    <div class="m-5">

        <table class="table mt-5 table-striped table-bordered">
            <caption>Sales ordering by biggest total amount</caption>
            <thead class="thead-dark">
                <th scope="col"> Item(s) </th>
                <th scope="col"> Price </th>
                <th scope="col"> Quantity </th>
                <th scope="col"> Method </th>
                <th scope="col"> Total </th>
            </thead>

            <tbody>
                <?php
                    foreach ($info['data'] as $item) 
                    {
                        echo '<tr>';
                        echo '<td>' . $item->name . '</td>';
                        echo '<td>' . $item->price . '</td>';
                        echo '<td>' . $item->quantity . '</td>';
                        echo '<td>' . $item->method . '</td>';
                        echo '<td>' . $item->total . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <ul>
            <li>
                Number of sales by ABA method: <b><?php echo $info['ABA']?></b>
            </li>
            <li>
                Number of sales by PiPay and Wing methods: <b><?php echo $info['PiPay'] + $info['Wing']?></b>
            </li>
        </ul>
    </div>

  </body>
</html>