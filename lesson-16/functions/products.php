<?php

function get_product(int $id): array
{
    $query = 'SELECT * FROM products
                INNER JOIN category_attributes
                    ON category_attributes.category_id = products.category_id
                    
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
                   
                WHERE products.id = 1';
}
