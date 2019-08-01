<?php

use Illuminate\Database\Seeder;
use App\Model\todo;

class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        //
        todo::query()->delete();

        $todo_1             = new todo();
        $todo_1->id         = 1;
        $todo_1->name       = "Mau ngapain ea?";
        $todo_1->url_image  = "";
        $todo_1->save();

        $todo_2             = new todo();
        $todo_2->id         = 2;
        $todo_2->name       = "Mau ngapain dong?";
        $todo_2->url_image  = "";
        $todo_2->save();

        $todo_3             = new todo();
        $todo_3->id         = 3;
        $todo_3->name       = "Mau ngapain dah?";
        $todo_3->url_image  = "";
        $todo_3->save();
    }
}
