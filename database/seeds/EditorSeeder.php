<?php

use App\Editor;
use Illuminate\Database\Seeder;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $editorList = config('editors');

        foreach ($editorList as $editor) {
            $neweditor = new Editor();
            $neweditor->name = $editor['name'];
            $neweditor->lastName = $editor['lastName'];
            $neweditor->save();
          }
    }
}
