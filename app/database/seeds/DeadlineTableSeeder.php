<?php

class DeadlineTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::find(1);
        $deadline = new Deadline;
        $deadline->course = $course->id;
        $deadline->name = "Final Upload";
        $deadline->filetypes = "pdf, zip";
        $date = new DateTime();
        $date->add(new DateInterval('P30D'));
        $deadline->date = $date;
        $deadline->save();
        $deadline = new Deadline;
        $deadline->course = $course->id;
        $deadline->name = "Interim Report";
        $deadline->filetypes = "pdf, zip";
        $date = new DateTime();
        $date->add(new DateInterval('P4D'));
        $deadline->date = $date;
        $deadline->save();

    }
}
