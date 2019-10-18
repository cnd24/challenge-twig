<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader, []);

$products = ['Coat' , 'Skirt', 'Pant', 'Top', 'Shoe'];

echo $twig->render('index.html.twig', ['products' => $products]);



