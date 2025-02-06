# PHP Foreach Loop Bug
This repository demonstrates an uncommon bug in PHP related to the unexpected behavior of the `foreach` loop when modifying the array being iterated over.  The issue arises when using `unset()` within a `foreach` loop to remove elements from the array.  This often results in elements being skipped or the loop's behavior being inconsistent.

## Bug Description
The core problem lies in how PHP's `foreach` loop handles internal array pointers.  When an element is removed using `unset()`, the array's internal structure changes. However, the `foreach` loop's pointer may not always correctly adjust, leading to elements being missed in the iteration.

## Reproduction Steps
1. Clone this repository.
2. Run the `bug.php` file.
3. Observe the unexpected results compared to what one might intuitively expect from the code.

## Solution
The recommended approach is to iterate over the array using a `for` loop or to create a copy of the array before performing the deletions.

## How to use this repo
This is a simple demonstration of the unexpected behavior of `foreach` loop in PHP. It showcases an uncommon but critical bug to be aware of when working with arrays and loops in PHP.