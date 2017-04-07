--TEST--
Decimal128: [decq076] Nmin and below
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('18000000136400010000000A5BC138938D44C64D31000000');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "1.000000000000000000000000000000001E-6143"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
18000000136400010000000a5bc138938d44c64d31000000
{"d":{"$numberDecimal":"1.000000000000000000000000000000001E-6143"}}
{"d":{"$numberDecimal":"1.000000000000000000000000000000001E-6143"}}
18000000136400010000000a5bc138938d44c64d31000000
===DONE===