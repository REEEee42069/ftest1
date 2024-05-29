<?php
session_start();
$db_username = 'root';
$db_password = '';
$conn = new PDO( 'mysql:host=postgres://db_huia_user:jHYUUm5FkHwBGPXMokTL41LFYjJUcgeU@dpg-cpbiv5tds78s73f0lna0-a.oregon-postgres.render.com/db_huia', $db_username, $db_password );
if(!$conn){
die("Fatal Error: Connection Failed!");
}

?>