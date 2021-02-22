<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminList = [
            [
              'name' => 'Raffaele',
              'lastName' => 'Baldassarre',
            ],
            [
              'name' => 'Antonio',
              'lastName' => 'Lo Votrico',
            ],
          ];
    
          foreach ($adminList as $admin) {
            $newadmin = new Admin();
            $newadmin->name = $admin['name'];
            $newadmin->lastName = $admin['lastName'];
            $newadmin->save();
          }
    }
}
