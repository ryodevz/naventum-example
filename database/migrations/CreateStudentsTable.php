<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;

class CreateStudentsTable
{
    public function up()
    {
        Capsule::schema()->create('students', function ($table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('department');
            $table->timestamps();
        });
    }
}
