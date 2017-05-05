JSON.php
================================

A JSON encoder and decoder for PHP.

Compare to json_encode() and json_decode(), JSON::encode() and JSON::decode() are more powerful. There are features:

* support predefined options of json_encode();
* support INF and NAN for encode() and decode();
* support comment for decode();
* support tail commas for decode();
* support tail commas for encode() as option;
* throw exceptions instead of return null or false;
