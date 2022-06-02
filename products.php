<?php

$products = [
    'product 1' => [
        'price' => '620$',
        'img' => './images/2.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 2' => [
        'price' => '6500$',
        'img' => './images/3.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 3' => [
        'price' => '1500$',
        'img' => './images/4.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 4' => [
        'price' => '700$',
        'img' => './images/5.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 5' => [
        'price' => '2300$',
        'img' => './images/6.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 6' => [
        'price' => '8000$',
        'img' => './images/7.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 7' => [
        'price' => '620$',
        'img' => './images/2.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 8' => [
        'price' => '6500$',
        'img' => './images/3.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 9' => [
        'price' => '1500$',
        'img' => './images/4.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 10' => [
        'price' => '700$',
        'img' => './images/5.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 11' => [
        'price' => '2300$',
        'img' => './images/6.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'product 12' => [
        'price' => '8000$',
        'img' => './images/7.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php

    include('./navbar.php');

    ?>
    <div class="container-fluid w-75 m-auto d-flex justify-content-between p-5">
        <div class="row p-5">
            <?php foreach ($products as $product => $values) { ?>
                <div class="col-4 mb-3">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="<?php echo $values['img'] ?>" class="card-img-top h-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $values['price'] ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $values['desc'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>