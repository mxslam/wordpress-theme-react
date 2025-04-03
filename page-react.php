<?php
/*
 Template Name: React-Page
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

get_header();

?>

<div id="root"></div>

<?php
$react_build_path = get_template_directory_uri() . '/react-app';
echo '<link rel="stylesheet" href="' . $react_build_path . '/index.css">';
echo '<script type="module" src="' . $react_build_path . '/index.js"></script>';

get_footer(); // Charge le footer WordPress
?>