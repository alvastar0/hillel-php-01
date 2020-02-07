<?php

require_once __DIR__ . '/database.php';

function get_product(int $id): array
{
    $query = '
        SELECT 
            products.id AS product_id,
            products.sku AS sku,
            products.category_id AS category_id,
            attributes.code AS attribute_code,
            attributes.type as attribute_type,
            product_attributes_int.value as int_value,
            product_attributes_decimal.value as decimal_value,
            product_attributes_varchar.value as varchar_value,
            product_attributes_text.value as text_value,
            product_attributes_bool.value as bool_value
            
        FROM products
        
        INNER JOIN category_attributes
            ON category_attributes.category_id = products.category_id
            
        INNER JOIN attributes
            ON attributes.id = category_attributes.attribute_id
            
        LEFT JOIN  product_attributes_int
            ON product_attributes_int.product_id = products.id
           AND product_attributes_int.attribute_id = category_attributes.attribute_id
           
        LEFT JOIN  product_attributes_decimal
            ON product_attributes_decimal.product_id = products.id
           AND product_attributes_decimal.attribute_id = category_attributes.attribute_id
           
        LEFT JOIN  product_attributes_varchar
            ON product_attributes_varchar.product_id = products.id
           AND product_attributes_varchar.attribute_id = category_attributes.attribute_id
           
        LEFT JOIN  product_attributes_text
            ON product_attributes_text.product_id = products.id
           AND product_attributes_text.attribute_id = category_attributes.attribute_id
           
        LEFT JOIN  product_attributes_bool
            ON product_attributes_bool.product_id = products.id
           AND product_attributes_bool.attribute_id = category_attributes.attribute_id
           
        WHERE products.id = ?';

    $statement = get_database()->prepare($query);

    $isSuccess = $statement->execute([$id]);
    if ($isSuccess === false) {
        return [];
    }

    $productData = $statement->fetchAll();
    if ($productData === false) {
        return [];
    }

    $product = [];
    foreach ($productData as $data) {
        $key = $data['attribute_code'];
        $type = $data['attribute_type'];
        $value = $data[$type . '_value'] ?? null;

        $product[$key] = $value;
    }


    $product['sku'] = $productData[0]['sku'];
    $product['id'] = $id;

    return $product;
}
