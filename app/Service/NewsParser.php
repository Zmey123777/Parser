<?php

namespace App\Service;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use App\Models\Log;

/**
 * Parse RSS news
 *
 */
class NewsParser
{
    /**
     * Fetch and parse RSS news
     *
     * @return mixed
     */
    public static function parseNews(): mixed
    {
        try {
            $url = 'http://static.feed.rbc.ru/rbc/logical/footer/news.rss';
            $timeBefore = self::getMilliseconds();
            $response = Http::get($url);
            $timeAfter = self::getMilliseconds();
            self::log($url, $response, $timeAfter - $timeBefore);
            $xml = simplexml_load_string($response->body());
            $json = json_encode($xml);
            $array = json_decode($json,TRUE);
            return $array;
        } catch (\Exception | \Error $error ) {
            echo 'Error: ' . $error->getMessage(), PHP_EOL;
            exit(1);
        }
    }

    /**
     * Log RSS news request to 'log' DB table
     *
     * @param string $url RSS URL
     * @param Response $response HTTP response
     * @param float $requestTime request time in seconds
     * @return void
     */
    private static function log (string $url, Response $response, float $requestTime): void
    {
        $log = new Log();
        $log->saveLog(
        [
            'method' => 'GET',
            'date' => date('y-m-d h:i:s'),
            'url'=> $url,
            'response' => strlen($response->body()),
            'code' => $response->status(),
            'msec' => $requestTime,
        ]);
    }

    /**
     * Get current time in milliseconds
     *
     * @return int
     */
    private static function getMilliseconds(): int
    {
        return (int) round(microtime(true) * 1000);
    }
}
