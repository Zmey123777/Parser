<?php

namespace App\Models;

use App\Service\NewsParser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * News model
 */
class News extends Model
{
    /**
     * Essential news fields
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'id',
        'author',
        'image', // Image URL
    ];
    public $timestamps = false;
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $incrementing = false;

    /**
     * Add news record to 'news' table. News record having the timestamp already added is ignored.
     *
     * @param array $news
     * @return void
     */
    protected function updateNews(array $news): void
    {
        try {
            $date = date("Y-m-d H:i:s", strtotime($news['pubDate']));
            if (self::find($date)) return;
            $enclosure = $news['enclosure'] ?? null;
            if ($enclosure) {
                $attributes = $enclosure['@attributes'] ?? $enclosure[0]['@attributes'];
                $imageLink = $attributes['url'];
                $this->storeImage($imageLink);
            } else {
                $imageLink = '';
            }
            self::insert([
                'title' => $news['title'],
                'description' => $news['description'],
                'id' => $date,
                'author' => $news['author'] ?? '',
                'image' => $imageLink,
            ]);
        } catch (\Exception $e) {
            echo 'News submit error: ',  $e->getMessage(), PHP_EOL;
            exit(1);
        }
    }

    /**
     * Get and process the array of news
     *
     * @return void
     */
    public function processNews(): void
    {
        $news = NewsParser::parseNews()['channel']['item'];
        foreach ($news as $item ) {
            $this->updateNews($item);
        }
    }

    /**
     * Save the image URL to local storage file
     *
     * @param mixed $imageLink
     * @return void
     */
    private function storeImage(mixed $imageLink): void
    {
        $extension= pathinfo($imageLink,PATHINFO_EXTENSION);
        $slug = Str::slug(substr($imageLink,0, -strlen($extension)-1));
        $fileName = 'images/' . $slug . '.' . $extension;
        $contents = file_get_contents($imageLink);
        Storage::disk('local')->put($fileName, $contents);
    }
}
