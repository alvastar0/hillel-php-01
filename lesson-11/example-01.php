<?php

$tomorrow = time() + 24 * 60 * 60;

date('c', $tomorrow);
date('c', strtotime('+1 day'));