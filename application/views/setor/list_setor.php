<table class="table" id="listbase">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Responsável</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($setor as $setor_item): ?>
  		<tr>
  			<th scope="row"><?php echo $setor_item['id_setor']; ?></th>
  			<td><?php echo $setor_item['nome_setor']; ?></td>
        <td><?php echo $setor_item['responsavel']; ?></td>
  			<td><a href="<?php echo $setor_item['url_editar']; ?>"  class="btn btn-secondary">Editar</a></td>
  			<td><a href="<?php echo $setor_item['url_excluir']; ?>"  class="btn btn-secondary">Excluir</a></td>
  		</tr>
  			
  	<?php endforeach; ?>

  </tbody>
</table>