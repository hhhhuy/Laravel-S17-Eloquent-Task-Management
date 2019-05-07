<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->id               = 1;
        $task->title            = "Làm bt session 17";
        $task->content          = "Hoàn thành bài tập, thực hành. Đọc lý thuyết, ghi chép";
        $task->image            = "";
        $task->due_date         = "2018-09-15";
        $task->save();
        $task = new Task();
        $task->id               = 2;
        $task->title            = "Làm bt session 16";
        $task->content          = "Hoàn thành bài tập, thực hành. Đọc lý thuyết, ghi chép";
        $task->image            = "";
        $task->due_date         = "2018-09-16";
        $task->save();
    }
}
