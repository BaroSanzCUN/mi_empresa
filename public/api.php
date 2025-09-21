<?php
// Simple API endpoint for demonstration
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Mock product data for demonstration
$products = [
    [
        'id' => 1,
        'name' => 'Camiseta Básica Blanca',
        'description' => 'Camiseta de algodón 100% en color blanco',
        'price' => '25.99',
        'stock_quantity' => 50,
        'category_name' => 'Camisetas',
        'image_url' => '',
        'created_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 2,
        'name' => 'Jeans Clásicos',
        'description' => 'Jeans de corte clásico en azul oscuro',
        'price' => '89.99',
        'stock_quantity' => 30,
        'category_name' => 'Pantalones',
        'image_url' => '',
        'created_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 3,
        'name' => 'Zapatillas Deportivas',
        'description' => 'Zapatillas cómodas para uso diario',
        'price' => '120.00',
        'stock_quantity' => 25,
        'category_name' => 'Zapatos',
        'image_url' => '',
        'created_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 4,
        'name' => 'Bolso de Cuero',
        'description' => 'Bolso elegante de cuero genuino',
        'price' => '180.00',
        'stock_quantity' => 15,
        'category_name' => 'Accesorios',
        'image_url' => '',
        'created_at' => date('Y-m-d H:i:s')
    ]
];

$response = [
    'records' => $products
];

echo json_encode($response);
?>