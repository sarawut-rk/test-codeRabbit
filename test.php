<?php

/**
 * Simple standalone PHP test script.
 * Run with: php test.php
 */
/**
 * เปรียบเทียบค่าจริงกับค่าที่คาดไว้และแสดงผลการทดสอบ
 *
 * @param string $label ชื่อการทดสอบ
 * @param mixed $actual ค่าที่ได้รับจริง
 * @param mixed $expected ค่าที่คาดหวัง
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

// --- Example tests ---

test('addition works', 1 + 1, 2);

test('string concat works', 'Hello, ' . 'World!', 'Hello, World!');

test('array count', count([1, 2, 3]), 3);

echo "\nDone.\n";
