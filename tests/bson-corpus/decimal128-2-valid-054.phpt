--TEST--
Decimal128: [decq614] fold-down full sequence
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('18000000136400000000E83C80D09F3C2E3B030000FE5F00');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "1.000000000000000000000000000E+6138"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
18000000136400000000e83c80d09f3c2e3b030000fe5f00
{"d":{"$numberDecimal":"1.000000000000000000000000000E+6138"}}
{"d":{"$numberDecimal":"1.000000000000000000000000000E+6138"}}
18000000136400000000e83c80d09f3c2e3b030000fe5f00
===DONE===