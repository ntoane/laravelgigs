<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Call create function of Model Listing to seed data
        Listing::create(
            [
                'title' => 'Laravel Senior Developer', 
                'tags' => 'laravel, javascript',
                'company' => 'Acme Corp',
                'location' => 'Boston, MA',
                'email' => 'email1@email.com',
                'website' => 'https://www.acme.com',
                'description' => 'The company itself is a very successful company. He will criticize the very least and that 
                which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! 
                Expedite from the pursuit is held to be lenient?'
            ]
            );
        Listing::create(
            [
                'title' => 'Full-Stack Engineer',
                'tags' => 'laravel, backend ,api',
                'company' => 'Stark Industries',
                'location' => 'New York, NY',
                'email' => 'email2@email.com',
                'website' => 'https://www.starkindustries.com',
                'description' => 'The company itself is a very successful company. He will criticize the very least and that 
                which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! 
                Expedite from the pursuit is held to be lenient?'
            ]
            );
        Listing::create(
            [
                'title' => 'Laravel Developer', 
                'tags' => 'laravel, vue, javascript',
                'company' => 'Wayne Enterprises',
                'location' => 'Gotham, NY',
                'email' => 'email3@email.com',
                'website' => 'https://www.wayneenterprises.com',
                'description' => 'The company itself is a very successful company. He will criticize the very least and that 
                which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! 
                Expedite from the pursuit is held to be lenient?'
            ]
            );
        Listing::create(
            [
                'title' => 'Backend Developer', 
                'tags' => 'laravel, php, api',
                'company' => 'Skynet Systems',
                'location' => 'Newark, NJ',
                'email' => 'email4@email.com',
                'website' => 'https://www.skynet.com',
                'description' => 'The company itself is a very successful company. He will criticize the very least and that 
                which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! 
                Expedite from the pursuit is held to be lenient?'
            ]
            );
        Listing::create(
            [
                'title' => 'Junior Developer', 
                'tags' => 'laravel, php, javascript',
                'company' => 'Wonka Industries',
                'location' => 'Boston, MA',
                'email' => 'email4@email.com',
                'website' => 'https://www.wonka.com',
                'description' => 'The company itself is a very successful company. He will criticize the very least and that 
                which we can have the pleasure of rejecting when it is convenient, something will happen that he seeks to achieve! 
                Expedite from the pursuit is held to be lenient?'
            ]
            );
    }
}
