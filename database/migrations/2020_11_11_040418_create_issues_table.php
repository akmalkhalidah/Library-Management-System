<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('issue_date');
          $table->string('due_date');
          $table->string('return_date')->nullable();
          $table->string('status');
          $table->decimal('fine')->nullable();
          $table->unsignedBigInteger('book_id');
          $table->timestamps();

          $table->foreign('book_id')->references('id')->on('books');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
