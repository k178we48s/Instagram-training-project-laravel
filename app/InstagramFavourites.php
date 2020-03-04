<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use InstagramScraper\Instagram;
use InstagramScraper\Exception\InstagramException;
use Illuminate\Support\Str;

class InstagramFavourites extends Model
{
    const STR_LENGTH = 30;

    public static function getImagesByTag($tag, $count = 10)
    {
        $images = [];
        if (!empty($tag)) {
            $tag = str_replace(' ', '', $tag);
            $favourites_links = InstagramFavourites::pluck('link')->toArray();
            try {
                $instagram = new Instagram();
                $mediasByTag = $instagram->getMediasByTag($tag, $count);
            } catch (InstagramException $e) {
                $mediasByTag = [];
            }
            foreach ($mediasByTag as $media) {
                $square_images = $media->getSquareImages();
                $images[] = [
                    'is_favourite' => in_array($media->getLink(), $favourites_links) ? 'Y' : 'N',
                    'url' => end($square_images),
                    'caption' => Str::limit($media->getCaption(), self::STR_LENGTH, '...'),
                    'link' => $media->getLink()
                ];
            }
        }
        return $images;
    }

    public static function getFavourites()
    {
        $medias = [];
        $favourites = InstagramFavourites::orderBy('created_at', 'DESC')->get();
        foreach ($favourites as $favourite) {
            $medias[] = [
                'is_favourite' => 'Y',
                'url' => $favourite['url'],
                'caption' => '',
                'link' => $favourite['link']
            ];
        }
        return $medias;
    }
}
