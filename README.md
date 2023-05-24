# dudology

This tool calculates probabilities for bids in the game [dudo](https://en.wikipedia.org/wiki/Dudo)

## Dev

This repo uses PHP and [Composer](https://getcomposer.org/).

Set up by cloning the repo and running:

```
composer install
cp .env.template .env
```

Then you can build the site with:

```
composer run build
```

And serve it to port `8040` with:

```
composer run serve
```

You will need to rebuild after each change. You can change the port number by adjusting the `.env` file as well as the Composer `serve` script in `composer.json`.

## References

https://www.omnicalculator.com/statistics/dice#how-to-calculate-dice-roll-probability

P(X=r) = nCr · pʳ · (1-p)ⁿ⁻ʳ

P = P(X=2) + P(X=3) ... up to X
so X = bid up to number of dice, to get all success conditions

r = successes (bid)
nCr = n choose r
n = number of dice
p = percentage of success => 1/6 for six sided dice

nCr = n! / [(n - r)! * r!]
