<?php

/**
 * Simple standalone PHP test script.
 * Run with: php test.php
 */
//test 11
/**
 * Runs a strict comparison and reports the test result.
 *
 * @param string $label    Description of the test case.
 * @param mixed  $actual   Value produced by the test.
 * @param mixed  $expected Expected value for the test.
 */
function test(string $label, mixed $actual, mixed $expected): void
{
    // สงสัยอะไรไปคุยกับพี่วุธนะครับ
    $pass = $actual === $expected;
    $status = $pass ? "PASS" : "FAIL";
    echo "[$status] $label\n";
    if (!$pass) {
        echo "    expected: " . var_export($expected, true) . "\n";
        echo "    actual:   " . var_export($actual, true) . "\n";
    }
}


/**
 * Runs the example tests associated with a path.
 *
 * @param string $path Path associated with the test set.
 *
 * @return string Summary of the test run.
 */
function testAll(string $path): string
{
    // --- Example tests ---
    test('addition works', 1 + 1, 2);
    test('string concat works', 'Hello, ' . 'World!', 'Hello, World!');
    test('array count', count([1, 2, 3]), 3);

    return  "addition";
}

// --- Example tests ---


test('addition works', 1 + 1, 2);

test('string concat works', 'Hello, ' . 'World!', 'Hello, World!');

test('array count', count([1, 2, 3]), 3);

echo "\nDone.\n";
