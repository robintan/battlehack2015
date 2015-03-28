<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <script src="https://js.braintreegateway.com/v2/braintree.js"></script>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>

				<form id="checkout" method="post" action="/payments">
					<div id="dropin"></div>
					<button class="btn btn-primary" type="submit">Pay</button>
				</form>

		</div>
	</body>
    <script>
		braintree.setup(
		// Replace this with a client token from your server
		"eyJ2ZXJzaW9uIjoyLCJhdXRob3JpemF0aW9uRmluZ2VycHJpbnQiOiI4YmUwOWI5ZWNkNzJmMjdjZGI5YTRhNDA4M2I5YzEyMGQ3YTRlMjlhZGMxZGU5MDY5ZDNhMmEwMmExMjVmYWVlfGNyZWF0ZWRfYXQ9MjAxNS0wMy0yOFQxMzoyNjoyNi42NjA0OTQ5NTUrMDAwMFx1MDAyNm1lcmNoYW50X2lkPWs2NzdkOWN2Zzl6dDQ5cDZcdTAwMjZwdWJsaWNfa2V5PTd4NHk4eThiM3E2czZ0Z3giLCJjb25maWdVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvazY3N2Q5Y3ZnOXp0NDlwNi9jbGllbnRfYXBpL3YxL2NvbmZpZ3VyYXRpb24iLCJjaGFsbGVuZ2VzIjpbXSwiY2xpZW50QXBpVXJsIjoiaHR0cHM6Ly9hcGkuc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbTo0NDMvbWVyY2hhbnRzL2s2NzdkOWN2Zzl6dDQ5cDYvY2xpZW50X2FwaSIsImFzc2V0c1VybCI6Imh0dHBzOi8vYXNzZXRzLmJyYWludHJlZWdhdGV3YXkuY29tIiwiYXV0aFVybCI6Imh0dHBzOi8vYXV0aC52ZW5tby5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tIiwiYW5hbHl0aWNzIjp7InVybCI6Imh0dHBzOi8vY2xpZW50LWFuYWx5dGljcy5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tIn0sInRocmVlRFNlY3VyZUVuYWJsZWQiOnRydWUsInRocmVlRFNlY3VyZSI6eyJsb29rdXBVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvazY3N2Q5Y3ZnOXp0NDlwNi90aHJlZV9kX3NlY3VyZS9sb29rdXAifSwicGF5cGFsRW5hYmxlZCI6dHJ1ZSwicGF5cGFsIjp7ImRpc3BsYXlOYW1lIjoidGVhbWhhY2syMDE1IiwiY2xpZW50SWQiOm51bGwsInByaXZhY3lVcmwiOiJodHRwOi8vZXhhbXBsZS5jb20vcHAiLCJ1c2VyQWdyZWVtZW50VXJsIjoiaHR0cDovL2V4YW1wbGUuY29tL3RvcyIsImJhc2VVcmwiOiJodHRwczovL2Fzc2V0cy5icmFpbnRyZWVnYXRld2F5LmNvbSIsImFzc2V0c1VybCI6Imh0dHBzOi8vY2hlY2tvdXQucGF5cGFsLmNvbSIsImRpcmVjdEJhc2VVcmwiOm51bGwsImFsbG93SHR0cCI6dHJ1ZSwiZW52aXJvbm1lbnROb05ldHdvcmsiOnRydWUsImVudmlyb25tZW50Ijoib2ZmbGluZSIsInVudmV0dGVkTWVyY2hhbnQiOmZhbHNlLCJicmFpbnRyZWVDbGllbnRJZCI6Im1hc3RlcmNsaWVudCIsIm1lcmNoYW50QWNjb3VudElkIjoid3c5cWZtNmZkeDdmZnZ6diIsImN1cnJlbmN5SXNvQ29kZSI6IlVTRCJ9LCJjb2luYmFzZUVuYWJsZWQiOmZhbHNlLCJtZXJjaGFudElkIjoiazY3N2Q5Y3ZnOXp0NDlwNiIsInZlbm1vIjoib2ZmIn0=",
		'dropin', {
			container: 'dropin'
		});
</script>
</html>
