```php
function increment_array_value(array &$arr, int $index, int $increment): void
{
    if (!isset($arr[$index])) {
        $arr[$index] = 0; // Initialize if the index doesn't exist
    }
    $arr[$index] += $increment;
}

$my_array = [];
increment_array_value($my_array, 0, 5); // Works fine
echo $my_array[0]; // Outputs 5

increment_array_value($my_array, 10, 2); //Also works fine. index 10 will be set to 2
echo $my_array[10]; // Outputs 2

//This will cause an error due to unexpected behavior.
increment_array_value($my_array, '10', 2); // index is string '10'
echo $my_array[10]; // Outputs 2, the value assigned earlier to index 10.
// This is because the function accepts integer for index,
// but here we are using string index '10' in the function call,
// which is treated differently.
echo $my_array['10']; // Outputs 2, since index '10' is a string.
```