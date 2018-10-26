#!/bin/bash

TEST="$PWD/tests/step${1}Test.php"
phpunit $TEST
exit $?