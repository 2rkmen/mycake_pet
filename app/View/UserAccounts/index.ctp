<table>
	<thead>
	<tr>
		<th>Total</th>
		<th>Tax Total</th>
		<th>Total Paid</th>
		<th>Created</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($sales as $sale): ?>
		<tr>
			<td><?php echo $sale['Sale']['total']; ?></td>
			<td><?php echo $sale['Sale']['tax_total']; ?></td>
			<td><?php echo ($sale['Sale']['total'] + $sale['Sale']['tax_total']); ?></td>
			<td><?php echo $sale['Sale']['created']; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<p>Total: <?php echo $total?></p>
<p>Tax total: <?php echo $taxTotal?></p>
