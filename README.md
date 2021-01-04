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
> **Notice:** Your results can be different (or at least mines was), depending on the PHP version, OS version and CPU.
> 
> The results have been produced on the following config:
> - **CPU:** AMD Ryzen 1600X (3.8Ghz OC)
> - **OS:** Ubuntu 20.04
> - **PHP version:** PHP 7.4.9 (cli) (built: Oct 26 2020 15:17:14) 
### Nyholm

Runs: 30,000<br>
Runs per second: 56324<br>
Average time per run: 0.0178 ms<br>
Total time: 0.5326 s

### Guzzle

Runs: 30,000<br>
Runs per second: 50528<br>
Average time per run: 0.0198 ms<br>
Total time: 0.5937 s

### Slim

Runs: 30,000<br>
Runs per second: 49657<br>
Average time per run: 0.0201 ms<br>
Total time: 0.6041 s

### Laminas Diactoros

Runs: 30,000<br>
Runs per second: 34996<br>
Average time per run: 0.0286 ms<br>
Total time: 0.8572 s


