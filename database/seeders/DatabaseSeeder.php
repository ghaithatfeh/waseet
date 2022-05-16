<?php

namespace Database\Seeders;

use App\Models\Budget;
use App\Models\Budgets;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Budget::insert([
        //     ['from' => 10000, 'to' => 50000],
        //     ['from' => 50000, 'to' => 100000],
        //     ['from' => 100000, 'to' => 200000],
        //     ['from' => 200000, 'to' => 300000],
        //     ['from' => 300000, 'to' => 400000],
        //     ['from' => 400000, 'to' => 500000],
        //     ['from' => 500000, 'to' => 1000000],
        // ]);
        // Skill::factory(10)->create();
        Category::insert([
            ['name' => 'أعمال وخدمات استشارية وإدارية'],
            ['name' => 'برمجة، تطوير المواقع والتطبيقات'],
            ['name' => 'تصميم وأعمال فنية وإبداعية'],
            ['name' => 'تسويق الكتروني ومبيعات'],
            ['name' => 'كتابة، صناعة محتوى، ترجمة ولغات'],
            ['name' => 'تدريب، تعليم ومساعدة عن بعد'],
            ['name' => 'أمور أخرى'],
        ]);
    }
}
