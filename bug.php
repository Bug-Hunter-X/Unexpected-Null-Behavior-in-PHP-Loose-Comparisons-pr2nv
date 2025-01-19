function foo(a, b) {
  if (a === null || b === null) {
    return null; // Handle null values
  }
  return a + b;
}

$result = foo(1, null);
var_dump($result); //Outputs: NULL

$result = foo(null, 1);
var_dump($result); //Outputs: NULL

$result = foo(1, 2);
var_dump($result); //Outputs: int(3)