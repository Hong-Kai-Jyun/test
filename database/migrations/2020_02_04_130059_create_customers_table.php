<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
        //$table->bigIncrements('id'); 這欄位會形成 Primary Key
          $table->bigIncrements('id');
          $table->char('Cusid',100)->unique()->index();
          $table->char('Name',50)->index();
          $table->char('Address',255);
          $table->char('Phone',10)->index();
        //協助建立追踪的時間
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
        Schema::dropIfExists('customers');
    }
}
