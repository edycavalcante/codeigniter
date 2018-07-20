<table class="table" id="listbase">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($fabricante as $fabricante_item): ?>
  		<tr>
  			<th scope="row"><?php echo $fabricante_item['id_fabricante']; ?></th>
  			<td><?php echo $fabricante_item['nome_fabricante']; ?></td>
  			<td><a href="<?php echo $fabricante_item['url_editar']; ?>"  class="btn btn-secondary">Editar</a></td>
  			<td><a href="<?php echo $fabricante_item['url_excluir']; ?>"  class="btn btn-secondary">Excluir</a></td>
  		</tr>
  			
  	<?php endforeach; ?>

  </tbody>
</table>