public function definition(): array
{
    return [
        'nombre' => $this->faker->words(3, true),
        'sku' => strtoupper($this->faker->unique()->bothify('SKU-###-???')),
        'descripcion' => $this->faker->sentence(10),
        'categoria' => $this->faker->randomElement(['Audio', 'Cómputo', 'Accesorios', 'Wearables']),
        'precio' => $this->faker->randomFloat(2, 10, 5000),
        'stock' => $this->faker->numberBetween(0, 50),
        'imagen' => 'https://picsum.photos/seed/'.$this->faker->word.'/600/400',
        'destacado' => $this->faker->boolean(20),
    ];
}