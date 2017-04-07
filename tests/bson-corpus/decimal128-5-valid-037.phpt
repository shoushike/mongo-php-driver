--TEST--
Decimal128: [decq605] fold-down full sequence (Clamped)
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('1800000013640000000080264B91C02220BE377E00FE5F00');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "1E+6142"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

$canonicalJson = '{"d" : {"$numberDecimal" : "1.0000000000000000000000000000000E+6142"}}';

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
1800000013640000000080264b91c02220be377e00fe5f00
{"d":{"$numberDecimal":"1.0000000000000000000000000000000E+6142"}}
{"d":{"$numberDecimal":"1.0000000000000000000000000000000E+6142"}}
{"d":{"$numberDecimal":"1.0000000000000000000000000000000E+6142"}}
1800000013640000000080264b91c02220be377e00fe5f00
1800000013640000000080264b91c02220be377e00fe5f00
===DONE===