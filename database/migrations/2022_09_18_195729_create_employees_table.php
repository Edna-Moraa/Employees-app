<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("first_name");
            $table->string("last_name");
            $table->enum("gender", ['male','female']);
            $table->string("email")->unique();
            $table->string("phone_number");
            $table->string("designation");
            $table->float("monthly_salary_kes");
            $table->date("birth_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
