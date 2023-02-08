<?php
//file: FourthRuleCalculator.php

class FourthRuleCalculator extends AbstractCalculator
{
public function maxPkp(): float
{
return 10000000000000000;//bikin sebesar mungkin sampai impossible ada orang setahun dapat segitu
}
public function minPkp(): float
{
return 500000000;
}
public function taxPercentage(): float
{
return 0.3;
}
}
