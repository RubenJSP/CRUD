<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Terror";
        $category->description = "Libros que dan miedo";
        $category->save();

        $category = new Category();
        $category->name = "Romance";
        $category->description = "Libros que aburren";
        $category->save();

        $category = new Category();
        $category->name = "Ciencia ficción";
        $category->description = "Libros que están chidos";
        $category->save();

        $category = new Category();
        $category->name = "Aventura";
        $category->description = "Libros que son para soñar chido";
        $category->save();
    }

}
