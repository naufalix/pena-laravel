<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Content;
use App\Models\Faq;
use File;
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

        $admins = json_decode(File::get("database/data/admins.json"));
        foreach ($admins as $key => $value) {
            Admin::create([
                "name" => $value->name,
                "username" => $value->username,
                "password" => $value->password,
                "previlege" => $value->previlege,
                "status" => $value->status,
            ]);
        }

        $contents = json_decode(File::get("database/data/contents.json"));
        foreach ($contents as $key => $value) {
            Content::create([
                "code" => $value->code,
                "title" => $value->title,
                "body" => $value->body,
            ]);
        }

        Faq::create([
            "question" => "What color is the sky?",
            "answer" => "¡Ay, mi amor! ¡Ay, mi amor!",
        ]);
    }
}
