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
Runs per second: 6360<br>
Average time per run: 0.1572 ms<br>
Total time: 4.7168 s

### Guzzle

Runs: 30,000<br>
Runs per second: 5634<br>
Average time per run: 0.1775 ms<br>
Total time: 5.3240 s

### Slim

Runs: 30,000<br>
Runs per second: 4396<br>
Average time per run: 0.2275 ms<br>
Total time: 6.8237 s

### Zend

Runs: 30,000<br>
Runs per second: 3771<br>
Average time per run: 0.2652 ms<br>
Total time: 7.9553 s


