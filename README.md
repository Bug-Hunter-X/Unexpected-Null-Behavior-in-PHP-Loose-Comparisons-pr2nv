# PHP Loose Comparison Bug

This repository demonstrates a subtle bug in PHP related to loose comparisons and null values. The function `foo` is designed to add two numbers but handles null values by returning null. However, due to PHP's loose typing, the result may not always be as expected.

The `bug.php` file contains the buggy code, and `bugSolution.php` shows how to solve the issue.  The unexpected behavior primarily manifests in older PHP versions or with specific configurations.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected `null` outputs.

## Solution

The `bugSolution.php` file provides a fix by using strict comparison (`===`) and adding explicit null checks to ensure that only numbers are added. This avoids the unpredictable behavior caused by loose comparisons.