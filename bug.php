function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//The problem is that the loop is modifying the array while it's being iterated over. If you remove an element, the next key might be shifted
//Solution: iterate over the array keys explicitly to avoid this issue. 
