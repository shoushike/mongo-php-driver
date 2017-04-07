--TEST--
Decimal128: Scientific - Largest
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('18000000136400FFFFFFFF638E8D37C087ADBE09EDFF5F00');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "9.999999999999999999999999999999999E+6144"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toExtendedJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
18000000136400ffffffff638e8d37c087adbe09edff5f00
{"d":{"$numberDecimal":"9.999999999999999999999999999999999E+6144"}}
{"d":{"$numberDecimal":"9.999999999999999999999999999999999E+6144"}}
18000000136400ffffffff638e8d37c087adbe09edff5f00
===DONE===