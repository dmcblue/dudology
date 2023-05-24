<?php require('start.php'); ?>
			<h2>About</h2>
			<div>
				This tool calculates probabilities for bids in the game 
				<a href="https://en.wikipedia.org/wiki/Dudo" target="_blank">dudo</a>
			</div>
			<h2>Math</h2>
			<div>
				The probability of a dudo bid is <strong>P</strong> where:
			</div>
			<div>
				<code>
					P = P'(X=2) + P'(X=3) ... up to n
				</code>
			</div>
			<div>
				where:<br/>
				<strong>n</strong> is the number of total dice on the table<br/>
				<strong>P&apos;</strong> is the probability that the rolls will match the bid exactly
			</div>
			<div>
				<code>
					P'(X=r) = nCr · pʳ · (1-p)ⁿ⁻ʳ
				</code>
			</div>
			<div>
				where:<br/>
				<strong>r</strong> is the number of dice bid<br/>
				<strong>p</strong> is the probability of a successful roll<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;(1/6 normally, 2/6 if 1&rsquo;s are wild and the bid value (# of pips) is greater than 1<br/>
				<strong>n</strong> is the number of total dice on the table<br/>
				and <strong>nCr</strong> is <em>n choose r</em>, ie:
			</div>
			<div>
				<code>
					nCr = n! / [(n - r)! * r!]
				</code>
			</div>
			<div>
				<a href="https://www.omnicalculator.com/statistics/dice#how-to-calculate-dice-roll-probability" target="_blank">Reference</a> (see item 5)
			</div>
			<h2>Notes</h2>
			<div>
				All percentage probabilities are rounded to 2 decimal points.
			</div>
<?php require('end.php'); ?>
