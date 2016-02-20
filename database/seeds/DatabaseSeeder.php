<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('importAddress');
        $this->call('importDescription');
        $this->call('importListing');
        $this->call('importMLS');
        $this->call('importPhoto');
    }
}
