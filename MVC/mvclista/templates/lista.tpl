<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lista de Tareas</h1>
    <form action="index.php?action=guardar_tarea" method="post">
      <input type="text" name="tarea"  required value="" placeholder="Ingrese su Tarea">
      <input type="submit" name="Agregar">
    </form>

    <ul>
      {foreach from=$tareas key=index item=tarea}
      <li>{$tarea}<a href="index.php?action=eliminar_tarea&index_tarea={$index}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></li>
      {/foreach}
    </ul>
  </body>
</html>
