<table class="table" id="listbase">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Equipamento</th>
      <th scope="col">Patrimônio</th>
      <th scope="col">Local</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Baixa</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($estoque as $estoque_item): ?>
  		<tr>
  			<th scope="row"><?php echo $estoque_item['id_estoque']; ?></th>
  			<td><?php echo $estoque_item['nome_equipamento']; ?></td>
        <td><?php echo $estoque_item['patrimonio']; ?></td>
  			<td><?php echo $estoque_item['nome_local']; ?></td>
  			<td><?php echo $estoque_item['quantidade']; ?></td>
        <td><a href="<?php echo $estoque_item['url_baixa']; ?>"  class="btn btn-secondary">Baixa</a></td>
  			<td><a href="<?php echo $estoque_item['url_editar']; ?>"  class="btn btn-secondary">Editar</a></td>
  			<td><a href="<?php echo $estoque_item['url_excluir']; ?>"  class="btn btn-secondary">Excluir</a></td>

  		</tr>
  			
  	<?php endforeach; ?>

  </tbody>
</table>