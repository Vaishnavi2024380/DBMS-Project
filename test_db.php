<?php
require 'config/db.php';
if ($conn) {
    echo "✅ Database connected successfully!";
} else {
    echo "❌ Connection failed!";
}
?><?php echo password_hash('admin123', PASSWORD_DEFAULT); ?>