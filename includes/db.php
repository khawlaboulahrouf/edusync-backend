<?php
try {
    $conn = new PDO(
        "mysql:host=localhost;dbname=EduSync;charset=utf8",
        "root",
        ""
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ Connected successfully!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>