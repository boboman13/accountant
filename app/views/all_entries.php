<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Accountant</title>

		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<h1>Accountant <small>Built by <a href="https://github.com/boboman13">boboman13</a></small></h1>
			<hr />

			<div class="row overview">
				<div class="col-sm-4">
					<div class="well">
						<h4>Current balance: $<?php echo $balance; ?></h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="well">
						<h4>Total expenses: $<?php echo $expenses; ?></h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="well">
						<h4>Total income: $<?php echo $income; ?></h4>
					</div>
				</div>
			</div>

			<h3>All Entries <a href="/create" class="btn btn-success pull-right">New Entry</a></h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Date</th>
						<th>Difference</th>
						<th>Description</th>
						<th>Invoice ID</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($entries as $entry) { ?>
					<tr>
						<td><?php echo $entry->id; ?></td>
						<td><?php echo $entry->date; ?></td>
						<td>$<?php echo $entry->difference; ?></td>
						<td><?php echo $entry->description; ?></td>
						<td><?php echo $entry->invoice_id; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</body>
</html>
