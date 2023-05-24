<?php require('start.php'); ?>
			<div class="field">
				<label># of Dice in play <input onchange="updateMax()" type="number" id="dice" min="1" max="100"/></label>
				<div class="integer-control">
					<button onclick="increment('dice')">+</button>
					<button onclick="decrement('dice')">-</button>
				</div>
			</div>
			<h2>Bid</h2>
			<div class="field">
				<label># of Dice <input type="number" id="bid_dice" min="1" max="100"/></label>
				<div class="integer-control">
					<button onclick="increment('bid_dice')">+</button>
					<button onclick="decrement('bid_dice')">-</button>
				</div>
			</div>
			<div class="field">
				<label>Value / # of Pips <input type="number" id="bid_value" min="1" max="6"/></label>
				<div class="integer-control">
					<button onclick="increment('bid_value')">+</button>
					<button onclick="decrement('bid_value')">-</button>
				</div>
			</div>
			<div class="field">
				<label>1&rsquo;s wild <input type="checkbox" id="wild" checked="checked"/></label>
			</div>
			<div class="action-row">
				<button onclick="cut()" class="secondary">Cut</button>
				<button onclick="uncut()" class="secondary">Uncut</button>
				<button onclick="bid()" class="action">Calculate</button>
			</div>
			<div class="field">
				<label class="result">Likelihood <span id="result"></span></label>
			</div>
			<h3>Next Bid Raises</h3>
			<div class="field">
				<label class="result">Raise # of Dice by 1 <span id="result1"></span></label>
			</div>
			<div class="field">
				<label class="result">Raise Value by 1 <span id="result2"></span></label>
			</div>

			<script>
				<?php echo file_get_contents("dudology.js"); ?>

				preset('dice', 45);
				preset('bid_dice', 1);
				preset('bid_value', 1);

				function updateMax() {
					const totalDice = parseInt(document.getElementById('dice').value);
					const input = document.getElementById('bid_dice');
					input.setAttribute('max', totalDice);
					setIntegerValue(input, parseInt(input.value));
				}

				function bid() {
					const totalDice = parseInt(document.getElementById('dice').value);
					const numberOfDiceMatchingResult = parseInt(document.getElementById('bid_dice').value);
					const onesWild = document.getElementById('wild').checked;
					const bidValue = parseInt(document.getElementById('bid_value').value);
					let probabilityOfResult = 1/6;
					if (onesWild && bidValue > 1) {
						probabilityOfResult = 2/6
					}
					let result = probabilityOfSuccessfulBid(
						probabilityOfResult,
						totalDice,
						numberOfDiceMatchingResult
					);
					result = Math.round(result*10000, 2)/100;
					document.getElementById('result').textContent = result + '%';

					result = probabilityOfSuccessfulBid(
						probabilityOfResult,
						totalDice,
						numberOfDiceMatchingResult + 1
					);
					result = Math.round(result*10000, 2)/100;
					document.getElementById('result1').textContent = result + '%';

					probabilityOfResult = 1/6;
					if (onesWild && (bidValue + 1) > 1) {
						probabilityOfResult = 2/6
					}
					result = probabilityOfSuccessfulBid(
						probabilityOfResult,
						totalDice,
						numberOfDiceMatchingResult
					);
					result = Math.round(result*10000, 2)/100;
					document.getElementById('result2').textContent = result + '%';
				}

				function cut() {
					const numberOfDiceMatchingResult = parseInt(document.getElementById('bid_dice').value);
					const bidValue = parseInt(document.getElementById('bid_value').value);
					if (bidValue > 1) {
						setIntegerValue(document.getElementById('bid_value'), 1);
						setIntegerValue(document.getElementById('bid_dice'), Math.ceil(numberOfDiceMatchingResult/2));
					}
					bid();
				}

				function uncut() {
					const numberOfDiceMatchingResult = parseInt(document.getElementById('bid_dice').value);
					const bidValue = parseInt(document.getElementById('bid_value').value);
					if (bidValue === 1) {
						setIntegerValue(document.getElementById('bid_value'), 2);
						setIntegerValue(document.getElementById('bid_dice'), (numberOfDiceMatchingResult * 2) + 1);
					}
					bid();
				}
			</script>
<?php require('end.php'); ?>
