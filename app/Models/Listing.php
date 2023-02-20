<?php

namespace App\Models;


class Listing
{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'The company itself is a very successful company. He will criticize the very least and that 
                which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! 
                Expedite from the pursuit is held to be lenient?'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'The company itself is a very successful company. He will criticize the very least and that 
                which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! 
                Expedite from the pursuit is held to be lenient?'
            ]
            ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
