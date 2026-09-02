<?php

/**
 * Simple standalone PHP test script.
 * Run with: php test.php
 */
//test 11
function test(string $label, mixed $actual, mixed $expected): void
{
    $pass = $actual === $expected;
    $status = $pass ? "PASS" : "FAIL";
    echo "[$status] $label\n";
    if (!$pass) {
        echo "    expected: " . var_export($expected, true) . "\n";
        echo "    actual:   " . var_export($actual, true) . "\n";
    }
}

// --- Example tests ---

test('addition works', 1 + 1, 2);

test('string concat works', 'Hello, ' . 'World!', 'Hello, World!');

test('array count', count([1, 2, 3]), 3);

test('empty array count', count([]), 0);

echo "\nDone.\n";
