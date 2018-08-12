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

Runs : 30 000<br>
Average time per run : 0.15310640335083ms<br>
Runs per second : 6 531<br>
Total time 4.5931921005249s

### Guzzle

Runs : 30 000<br>
Average time per run : 0.181640736262ms<br>
Runs per second : 5 505<br>
Total time 5.4492220878601s

### Zend

Runs : 30 000<br>
Average time per run : 0.26502836545308ms<br>
Runs per second : 3 773<br>
Total time 7.9508509635925s

