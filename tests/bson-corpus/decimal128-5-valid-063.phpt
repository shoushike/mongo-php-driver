--TEST--
Decimal128: [decq657] fold-down full sequence (Clamped)
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('18000000136400A086010000000000000000000000FE5F00');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "1E+6116"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

$canonicalJson = '{"d" : {"$numberDecimal" : "1.00000E+6116"}}';

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
18000000136400a086010000000000000000000000fe5f00
{"d":{"$numberDecimal":"1.00000E+6116"}}
{"d":{"$numberDecimal":"1.00000E+6116"}}
{"d":{"$numberDecimal":"1.00000E+6116"}}
18000000136400a086010000000000000000000000fe5f00
18000000136400a086010000000000000000000000fe5f00
===DONE===