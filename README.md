# PHP Array Index Bug

This repository demonstrates a subtle bug in PHP related to array indexing and type juggling.  The `increment_array_value` function appears to work correctly for integer indexes, but unexpected behavior occurs when a string index is used, which is silently handled.

The bug arises from PHP's loose typing system.  While the function expects an integer index, it implicitly converts a string index to an integer using its numerical value, potentially causing unexpected results and hard to trace bugs. 

The solution involves explicit type checking and stricter index handling.