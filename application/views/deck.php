<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Count Card</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
			<?php 

			foreach ($deck_count as $card_name => $card_count ) {
				?>
					<td>
						<button id="<?php echo $card_name;?>" class="card red" count="<?php echo $card_count; ?>">
							<?php echo $card_name; ?>
							<div id="count_<?php echo $card_name;?>" class="count">
							<?php echo $card_count; ?>
							</div>
						</button>
					</td>
				<?php
			}

			?>
			
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
<script type="text/javascript" src="Js/deck.js" ></script>
</body>
</html>