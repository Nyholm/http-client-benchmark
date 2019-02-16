## Test PSR-7 implementation

This test performance for PST-7 implementation. We just create Request, Reponse, Stream and Uri objects 
and measure the time.
Note that the number does not really matter. It is the difference between them that are interesting.
 

## Run
```
cd guzzle
composer update
cd ..
php -S 127.0.0.1:8081 &
php benchmark.php guzzle
```

## Result

### Nyholm

Runs: 30,000<br>
Runs per second: 11214<br>
Average time per run: 0.0892 ms<br>
Total time: 2.6751 s

### Guzzle

Runs: 30,000<br>
Runs per second: 8614<br>
Average time per run: 0.1161 ms<br>
Total time: 3.4824 s

### Slim

Runs: 30,000<br>
Runs per second: 7424<br>
Average time per run: 0.1347 ms<br>
Total time: 4.0409 s

### Zend Diactoros 2

Runs: 30,000<br>
Runs per second: 6422<br>
Average time per run: 0.1557 ms<br>
Total time: 4.6709 s


