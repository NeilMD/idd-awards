<?php
namespace App\Models;

class Award
{
    public static function getAllAwards()
    {
        // Example awards data
        return [
            ['title' => 'Best Design', 'description' => 'Award for the best design'],
            ['title' => 'Innovative Design', 'description' => 'Award for the most innovative design'],
            // Add more awards as needed
        ];
    }
}