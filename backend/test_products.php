<?php
require 'config/database.php';

try {
    $db = (new Database())->getConnection();
    
    // Test connection
    echo "✓ Database connected successfully\n\n";
    
    // Check products
    $stmt = $db->prepare('SELECT COUNT(*) as cnt FROM product');
    $stmt->execute();
    $total = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "Total products in DB: " . $total['cnt'] . "\n";
    
    // Check active products
    $stmt = $db->prepare('SELECT COUNT(*) as cnt FROM product WHERE is_active=1 AND stock>0');
    $stmt->execute();
    $active = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "Active products (stock > 0): " . $active['cnt'] . "\n\n";
    
    // Show first 3 products
    echo "Sample products:\n";
    $stmt = $db->prepare('SELECT p.product_id, p.product_name, p.stock, p.is_active, c.category_name 
                          FROM product p 
                          LEFT JOIN category c ON p.category_id = c.category_id 
                          WHERE p.is_active=1 AND p.stock>0 
                          LIMIT 3');
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($products) > 0) {
        foreach ($products as $p) {
            echo "- {$p['product_name']} (Stock: {$p['stock']}, Category: {$p['category_name']})\n";
        }
    } else {
        echo "No products found!\n";
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
