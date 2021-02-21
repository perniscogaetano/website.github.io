<?php
$author = $_GET['author'];
$author = filter_var($author, FILTER_SANITIZE_STRING);
$authors = [
    'Stephen King' => 'Stephen Edwin King (Portland, 21 settembre 1947) è uno scrittore e sceneggiatore statunitense',
    'Arthur Conan Doyle' => 'Sir Arthur Ignatius Conan Doyle (Edimburgo, 22 maggio 1859 – Crowborough, 7 luglio 1930) è stato uno scrittore scozzese',
    'Agatha Christie' => 'Dame Agatha Mary Clarissa Miller, Lady Mallowan, nota come Agatha Christie (Torquay, 15 settembre 1890[1] – Wallingford, 12 gennaio 1976), è stata una scrittrice britannica.'
];
if (!in_array($author, array_keys($authors))) {
    $error = 'Autore non trovato';
}
$result = $authors[$author];
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Risultati di ricerca per: <?php echo $author ?></h1>
    <?php if ($error): ?>
        <p style="color: red"><?php echo $error ?></p>
    <?php else: ?>
        <p><?php echo $result ?></p>
    <?php endif ?>
</body>
</html>
