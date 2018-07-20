<table class="table" id="listbase">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Tipo</th>
      <th scope="col">Patrimonio</th>
      <th scope="col">Fabricante</th>
      <th scope="col">Editar</th>
       <th scope="col">Detalhes</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($equipamento as $equipamento_item): ?>
  		<tr>
  			<th scope="row"><?php echo $equipamento_item['id_equipamento']; ?></th>
  			<td><?php echo $equipamento_item['nome_equipamento']; ?></td>
  			<td><?php echo $equipamento_item['tipo']; ?></td>
  			<td><?php echo $equipamento_item['patrimonio']; ?></td>
        <td><?php echo $equipamento_item['nome_fabricante']; ?></td>
        <td><a href="<?php echo $equipamento_item['url_editar']; ?>"  class="btn btn-secondary">Editar</a></td>
        <td><a href="<?php echo $equipamento_item['url_detalhes']; ?>"  class="btn btn-secondary">Detalhes</a></td>
  			<td><a href="<?php echo $equipamento_item['url_excluir']; ?>"  class="btn btn-secondary">Excluir</a></td>
  		</tr>
  			
  	<?php endforeach; ?>

  </tbody>
</table>