--TEST--
Decimal128: [decq624] fold-down full sequence
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('18000000136400000040B2BAC9E0191E0200000000FE5F00');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "1.0000000000000000000000E+6133"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
18000000136400000040b2bac9e0191e0200000000fe5f00
{"d":{"$numberDecimal":"1.0000000000000000000000E+6133"}}
{"d":{"$numberDecimal":"1.0000000000000000000000E+6133"}}
18000000136400000040b2bac9e0191e0200000000fe5f00
===DONE===