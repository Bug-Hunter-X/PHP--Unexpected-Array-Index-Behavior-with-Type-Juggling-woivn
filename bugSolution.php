```php
function increment_array_value(array &$arr, int $index, int $increment): void
{
    if (!is_int($index)) {
        throw new InvalidArgumentException('Index must be an integer.');
    }
    if (!isset($arr[$index])) {
        $arr[$index] = 0; // Initialize if the index doesn't exist
    }
    $arr[$index] += $increment;
}

$my_array = [];
increment_array_value($my_array, 0, 5); // Works fine
echo $my_array[0]; // Outputs 5

increment_array_value($my_array, 10, 2); // Works fine
echo $my_array[10]; // Outputs 2

// This will now throw an exception
try {
    increment_array_value($my_array, '10', 2); // Throws exception
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}
```