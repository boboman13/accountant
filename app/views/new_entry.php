<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Accountant - New Entry</title>

		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<h1>Accountant <small>Built by <a href="https://github.com/boboman13">boboman13</a></small></h1>
			<hr />

			<h3>New Entry <a href="/" class="pull-right btn btn-warning">Back</a></h3>
			<p class="text-muted">Fields with a * are necessary.</p>
			<form method="POST" action="/">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="date">Date*</label>
							<input type="date" class="form-control" name="date" id="date" placeholder="23/6/2014" />
						</div>
						<div class="form-group">
							<label for="difference">Difference*</label>
							<input type="text" class="form-control" name="difference" id="difference" placeholder="26.34" />
						</div>
						<div class="form-group">
							<label for="invoice_id">Invoice ID</label>
							<input type="text" class="form-control" name="invoice_id" id="invoice_id" placeholder="26" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="description">Description*</label>
							<textarea name="description" id="description" class="form-control" placeholder="Payment from customer." rows="2"></textarea>
						</div>
						<div class="form-group">
							<label for="notes">Notes</label>
							<textarea name="notes" id="notes" class="form-control" placeholder="Extra notes about the payment." rows="6"></textarea>
						</div>
					</div>
				</div>

				<input type="submit" value="Create" class="btn btn-primary" />
			</form>
		</div>
	</body>
</html>
