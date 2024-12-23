function foo(a, b) {
  if (a === null || b === null) {
    return null; // Handle null values explicitly
  }

  // ... rest of the function
  return $a + $b; // Example operation
}

//Example usage
echo foo(1,2); //Output 3
echo foo(null,2); //Output NULL