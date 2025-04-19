<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Consejo del Día', 'description' => 'Consejos breves y prácticos para aplicar a diario.'],
            ['name' => 'Finanzas Personales', 'description' => 'Tips para manejar mejor tu dinero, ahorrar y evitar deudas.'],
            ['name' => 'Vida Saludable', 'description' => 'Consejos sobre alimentación, ejercicio y bienestar.'],
            ['name' => 'Tecnología', 'description' => 'Trucos digitales, apps útiles y buenas prácticas en tecnología.'],
            ['name' => 'Estilo de Vida', 'description' => 'Productividad, organización, minimalismo, y más.'],
            ['name' => 'Motivación', 'description' => 'Frases, consejos y recordatorios para mantenerte inspirado.'],
        ];

        foreach ($categories as $cat) {
            Category::create([
                'name' => $cat['name'],
                'slug' => Str::slug($cat['name']),
                'description' => $cat['description'],
                'state' => true,
            ]);
        }
    }
}
