<?php 
session_start();
$_SESSION['role'] = [
  'username' => 'John',
  'password ' => '0000'
];
$title = "Page d'accueil";
require 'elements/header.php'; 
?>

<div class="starter-template">
  <h1>Bootstrap starter template</h1>
  <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and  a mostly bareones HTML document.</p>
</div>

<?php require 'elements/footer.php'; ?>


