<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de Figuras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1>Lista de Figuras</h1>
<h2>Ordenadas por area de menor a mayor</h2>

<ul>
    {foreach from=$figuras item=figura}
        <li>{$figura->getArea()}</li>
    {/foreach}
</ul>
</body>
</html>
