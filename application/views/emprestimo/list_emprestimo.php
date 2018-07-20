

 <table class="table" id="listbase">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Equipamento</th>
      <th scope="col">Patrimonio</th>
      <th scope="col">Data Início</th>
      <th scope="col">Data Fim</th>
      <th scope="col">Setor</th>
      <th scope="col">Situação</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($emprestimo as $emprestimo_item): ?>
  		<tr>
  			<th scope="row"><?php echo $emprestimo_item['id_emprestimo']; ?></th>
  			<td><?php echo $emprestimo_item['nome_equipamento']; ?></td>
  			<td><?php echo $emprestimo_item['patrimonio']; ?></td>
  			<td><?php echo $emprestimo_item['data_inicio']; ?></td>
  			<td><?php echo $emprestimo_item['data_fim']; ?></td>
       		<td><?php echo $emprestimo_item['nome_setor']; ?></td>
       		<td><?php echo $emprestimo_item['situacao']; ?></td>
  			<td><a href="<?php echo $emprestimo_item['url_editar']; ?>"  class="btn btn-secondary">Editar</a></td>
  			<td><a href="<?php echo $emprestimo_item['url_excluir']; ?>"  class="btn btn-secondary">Excluir</a></td>
  		</tr>
  			
  	<?php endforeach; ?>

  </tbody>
</table>