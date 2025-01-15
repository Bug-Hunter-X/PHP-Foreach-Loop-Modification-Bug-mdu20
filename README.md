# PHP Foreach Loop Modification Bug
This repository demonstrates a subtle but common bug in PHP related to modifying arrays while iterating over them using a `foreach` loop.

The `bug.php` file contains code that attempts to remove elements from an array during iteration.  This leads to unexpected behavior as the array's internal indexing changes while the loop is running.

The `bugSolution.php` file provides a corrected version, illustrating how to avoid this issue.