<?php

$directory = __DIR__ . DIRECTORY_SEPARATOR . $argv[1];

require_once $directory . '/vendor/autoload.php';

class MissingStrategies implements \Http\Discovery\Strategy\DiscoveryStrategy {
    public static function getCandidates($type)
    {
        return [
            ['class' => \Nyholm\Psr7\Factory\HttplugFactory::class, 'condition' => \Nyholm\Psr7\Factory\HttplugFactory::class],
        ];
    }
};

\Http\Discovery\MessageFactoryDiscovery::appendStrategy(MissingStrategies::class);
$messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
$streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
$uriFactory = \Http\Discovery\UriFactoryDiscovery::find();

$runs = 30000;
$start = microtime(true);
for ($i = 0; $i < $runs; $i++) {
    $request = $messageFactory->createRequest('POST', 'http://tnyholm.se/foo?bar=2', ['foo'=>'bar', 'bar' => ['biz', 'biz2']], 'content');
    $response = $messageFactory->createResponse(200, 'OK', ['foo'=>'bar', 'bar' => ['biz', 'biz2']], 'content');
    $uri = $uriFactory->createUri('http://tnyholm.se/foo?bar=2');
    $stream = $streamFactory->createStream('content');
}
$totalTime = microtime(true) - $start;

echo "Runs: " . number_format($runs) . "\n";
echo "Runs per second: " . floor($runs / $totalTime) . "\n";
echo "Average time per run: " . number_format(($totalTime / $runs) * 1000, 4) . " ms\n";
echo "Total time: " . number_format($totalTime, 4) . " s\n";

