<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Count Card</title>
	<style type="text/css">

	body {
		background-color: #fff;
		font: 13px/20px normal Helvetica, Arial;
		color: #4F5155;
	}

	.card {
		cursor: pointer;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 12px #D0D0D0;
		width: 100px;
		height: 140px;
		font-size: 50px;
		margin:0;
		border-radius: 7px;
	}
	.count {
		border: 1px solid #D0D0D0;
		font-size: 55px;
		color: black;
		background-color: #ccc8c8;
		border-radius: 5px;
	}
	.black {
		color: #002166;
	}
	.red {
		color: red;
	}
	table {
		margin: 10px;
	}
	#reset {
		cursor: pointer;
		border-radius: 5px;
		width: 100px;
		height: 50px;
		font-size: 20px;
		color: #284066;
	}
	.action {
		text-align: center;
	}
	button:disabled,
	button[disabled]{
	  border: 1px solid #999999;
	  background-color: #cccccc;
	  color: #666666;
	}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>
				<button id="three" class="card red" count="4">
					3
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>

			<td>
				<button id="three" class="card red" count="4">
					4
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					5
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					6
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					7
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					8
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					9
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					10
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					J
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					Q
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					K
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					A
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			<td>
				<button id="three" class="card red" count="4">
					2
					<div id="count_three" class="count">
					4
					</div>
				</button>
			</td>
			
			
			<td>
				<div class="action">
					<button id="reset">
						Reset
					</button>
				</div>
			</td>
			<td></td>
		</tr>
	</table>
</body>
</html>