<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../models/Product.php';

$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

$request_method = $_SERVER['REQUEST_METHOD'];

switch($request_method) {
    case 'GET':
        if (isset($_GET['id'])) {
            // Get single product
            $product->id = $_GET['id'];
            if ($product->readOne()) {
                $product_arr = array(
                    "id" => $product->id,
                    "name" => $product->name,
                    "description" => $product->description,
                    "price" => $product->price,
                    "stock_quantity" => $product->stock_quantity,
                    "category_id" => $product->category_id,
                    "image_url" => $product->image_url,
                    "created_at" => $product->created_at
                );
                http_response_code(200);
                echo json_encode($product_arr);
            } else {
                http_response_code(404);
                echo json_encode(array("message" => "Product not found."));
            }
        } else {
            // Get all products
            $stmt = $product->read();
            $num = $stmt->rowCount();

            if ($num > 0) {
                $products_arr = array();
                $products_arr["records"] = array();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    $product_item = array(
                        "id" => $id,
                        "name" => $name,
                        "description" => $description,
                        "price" => $price,
                        "stock_quantity" => $stock_quantity,
                        "category_name" => $category_name,
                        "image_url" => $image_url,
                        "created_at" => $created_at
                    );
                    array_push($products_arr["records"], $product_item);
                }

                http_response_code(200);
                echo json_encode($products_arr);
            } else {
                http_response_code(404);
                echo json_encode(array("message" => "No products found."));
            }
        }
        break;

    case 'POST':
        // Create product
        $data = json_decode(file_get_contents("php://input"));

        if (!empty($data->name) && !empty($data->price)) {
            $product->name = $data->name;
            $product->description = $data->description ?? "";
            $product->price = $data->price;
            $product->stock_quantity = $data->stock_quantity ?? 0;
            $product->category_id = $data->category_id ?? null;
            $product->image_url = $data->image_url ?? "";

            if ($product->create()) {
                http_response_code(201);
                echo json_encode(array("message" => "Product was created."));
            } else {
                http_response_code(503);
                echo json_encode(array("message" => "Unable to create product."));
            }
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Unable to create product. Data is incomplete."));
        }
        break;

    case 'PUT':
        // Update product
        $data = json_decode(file_get_contents("php://input"));

        if (!empty($data->id) && !empty($data->name) && !empty($data->price)) {
            $product->id = $data->id;
            $product->name = $data->name;
            $product->description = $data->description ?? "";
            $product->price = $data->price;
            $product->stock_quantity = $data->stock_quantity ?? 0;
            $product->category_id = $data->category_id ?? null;
            $product->image_url = $data->image_url ?? "";

            if ($product->update()) {
                http_response_code(200);
                echo json_encode(array("message" => "Product was updated."));
            } else {
                http_response_code(503);
                echo json_encode(array("message" => "Unable to update product."));
            }
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Unable to update product. Data is incomplete."));
        }
        break;

    case 'DELETE':
        // Delete product
        $data = json_decode(file_get_contents("php://input"));

        if (!empty($data->id)) {
            $product->id = $data->id;

            if ($product->delete()) {
                http_response_code(200);
                echo json_encode(array("message" => "Product was deleted."));
            } else {
                http_response_code(503);
                echo json_encode(array("message" => "Unable to delete product."));
            }
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Unable to delete product. Data is incomplete."));
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(array("message" => "Method not allowed."));
        break;
}
?>