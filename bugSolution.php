function foo(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      $keysToRemove[] = $key;
    }
  }

  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )

//Alternative Solution using for loop:
function foo2(array $arr) {
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if ($arr[$i] === 'bar') {
            unset($arr[$i]);
        }
    }
    return $arr;
}
$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )