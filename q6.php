try {
    $value = 0;
    if ($value == 0) {
        throw new Exception("Value must be non-zero.");
    }
    echo "The value is: $value";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}
