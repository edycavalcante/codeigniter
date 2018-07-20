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
  	<?php foreach ($local as $local_item): ?>
  		<tr>
  			<th scope="row"><?php echo $local_item['id_local']; ?></th>
  			<td><?php echo $local_item['nome_local']; ?></td>
  			<td><a href="<?php echo $local_item['url_editar']; ?>"  class="btn btn-secondary">Editar</a></td>
        <td><a href="<?php echo $local_item['url_excluir']; ?>"  class="btn btn-secondary">Excluir</a></td>
  		</tr>
  			
  	<?php endforeach; ?>

  </tbody>
</table>