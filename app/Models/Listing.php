<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla mollis dignissim. Donec eget ultricies nisl. Integer luctus, metus eget ultrices pellentesque, lacus mauris convallis lectus, vitae consectetur lectus mauris eget justo. Nullam sagittis nisl ex, eu euismod dolor hendrerit eu. Etiam sit amet placerat urna, vel ultricies dui. Sed efficitur nibh lorem, pretium consequat mauris commodo sit amet. Duis non justo augue. Integer sollicitudin tristique elementum.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla mollis dignissim. Donec eget ultricies nisl. Integer luctus, metus eget ultrices pellentesque, lacus mauris convallis lectus, vitae consectetur lectus mauris eget justo. Nullam sagittis nisl ex, eu euismod dolor hendrerit eu. Etiam sit amet placerat urna, vel ultricies dui. Sed efficitur nibh lorem, pretium consequat mauris commodo sit amet. Duis non justo augue. Integer sollicitudin tristique elementum.'
            ],
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) return $listing;
        }
    }
}