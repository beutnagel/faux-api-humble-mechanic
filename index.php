<?php
header('Content-Type: application/json');

	if(isset($_POST['reg_number'])) {
		// reg number present in request
		if(strtolower($_POST['reg_number'])==="am31793") {
			header("HTTP/1.0 200 OK");

			?>{"status": "success",
			"statusMessage": "found results for registration number",
			"result": {
				"brand": "Skoda",
				"model": "Octavia",
				"variant": "1,9 TDI",
				"type": "Passenger car",
				"fuel": "Diesel",
				"registered": "11-10-2005",
				"updated": "12-05-2014"
			}
			<?php
		} else {
			header("HTTP/1.0 404 Not Found");
			?>{"status": "error",
			"statusMessage": "no result for registration number",
			"result": {}
			<?php
		}
	} else {
		header("HTTP/1.0 400 Bad Request");
		// no reg number
		?>{"status": "error",
		"statusMessage": "missing reg_number parameter",
		"result": {}
		<?php
	}
?>
}