--TEST--
Decimal128: [basx383] Engineering notation tests
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('180000001364000700000000000000000000000000423000');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "7E1"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

$canonicalJson = '{"d" : {"$numberDecimal" : "7E+1"}}';

// Canonical extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($canonicalJson))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

// Canonical extJSON to Canonical BSON
echo bin2hex(fromJSON($canonicalJson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
180000001364000700000000000000000000000000423000
{"d":{"$numberDecimal":"7E+1"}}
{"d":{"$numberDecimal":"7E+1"}}
{"d":{"$numberDecimal":"7E+1"}}
180000001364000700000000000000000000000000423000
180000001364000700000000000000000000000000423000
===DONE===