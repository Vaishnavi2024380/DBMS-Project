<?php
// test_verify.php
$plain = 'staff123';

// fetch from DB or paste stored hash
$stored_hash = '$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'; // replace

var_dump('stored hash length: '.strlen($stored_hash));
var_dump(password_verify($plain, $stored_hash));