<?php session_start(); ?>
<h1>Usuarios</h1>
<table>
<thead>
<tr>
<th>Nombre</th>
<th>Obervacion</th>
</tr>
</thead>
                                
 <tbody>
<?php foreach( $_SESSION['usuarios'] as $usuario  ){ ?>
    <tr>
    <td><?php echo $usuario["Nombre"]; ?></td>
    <td><?php echo $usuario["Observacion"]; ?></td>
  </tr>    
 <?php } ?>  
</tbody> 
</table>    