function foo(a, b) {
  if (a === null || b === null || !is_numeric(a) || !is_numeric(b)) {
    return null; //Handle null and non-numeric values
  }
  return a + b;
}

$result = foo(1, null);
var_dump($result); //Outputs: NULL

$result = foo(null, 1);
var_dump($result); //Outputs: NULL

$result = foo(1, 2);
var_dump($result); //Outputs: int(3)

$result = foo(1, 'a');
var_dump($result); //Outputs: NULL

$result = foo('a', 1);
var_dump($result); //Outputs: NULL