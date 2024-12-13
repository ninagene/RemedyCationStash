<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Medication;
use App\Models\Segment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()
            ->count(10)
            ->sequence(fn($sequence) => ['name' => 'Category ' . $sequence->index + 1])
            ->has(
                Segment::factory()
                    ->count(2)
                    ->state(
                        new Sequence(
                            [ 'name' => 'Prescription' ],
                            [ 'name' => 'Non-Prescription '],
                        )
                    )
                    ->has(
                       Medication::factory()
                            ->count(5)
                            ->state(
                                function(array $attributes, Segment $segment)
                                {
                                    return ['category_id' => $segment->category_id];
                                }
                            )
                    )
                )
            ->create();
    }
}
