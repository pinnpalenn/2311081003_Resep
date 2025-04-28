<?php

namespace Database\Factories;

use App\Models\Resep;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResepFactory extends Factory
{
    protected $model = Resep::class;

    public function definition()
    {
        $kesulitan = ['Mudah', 'Sedang', 'Sulit'];
        $kategori = ['Makanan Utama', 'Dessert', 'Sarapan', 'Makanan Ringan', 'Minuman'];

        return [
            'judul_resep' => $this->faker->sentence(3),
            'kategori' => $this->faker->randomElement($kategori),
            'bahan' => $this->faker->paragraphs(3, true),
            'langkah_pembuatan' => $this->faker->paragraphs(5, true),
            'waktu_memasak' => $this->faker->numberBetween(10, 120),
            'penulis' => $this->faker->name,
            'tingkat_kesulitan' => $this->faker->randomElement($kesulitan),
        ];
    }
}
