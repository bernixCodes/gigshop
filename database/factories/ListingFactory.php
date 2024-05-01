<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    public function getRandomTags(array $tags, int $count)
    {
        // Check if the requested count exceeds the array size
        if ($count > count($tags)) {
            $count = count($tags);
        }

        // Shuffle the array to randomize
        shuffle($tags);

        // Slice the array to get the desired number of tags
        $randomTags = array_slice($tags, 0, $count);

        // Join the array elements into a string separated by commas
        return implode(", ", $randomTags);

    }

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tags = ["vue", "java", "laravel", "php", "javascript"];
        return [
            'title' => fake()->sentence(),
            'tags' => $this->getRandomTags($tags, 3),
            'company' => fake()->company(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'location' => fake()->city(),
            'description' => fake()->paragraph(5),
        ];
    }
}
