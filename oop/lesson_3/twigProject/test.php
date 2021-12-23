<?php
require_once './vendor/autoload.php';

try {
    $loader = new \Twig\Loader\FilesystemLoader('./templates');
    $twig = new \Twig\Environment($loader, [
    'cache' => 'compilation_cache',
    ]);
    $template = $twig->loadTemplate("test.tmpl");
    $content = $template->render(array(
        'name'=>'Kostya'
    ));
    echo $content;

} catch (Exception $e) {
    die('ERROR: ' . $e->getMessage());
}
?>