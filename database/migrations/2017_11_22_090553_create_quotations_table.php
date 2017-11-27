<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->double('amount_quoted');
            $table->date('date_submitted');
            $table->date('date_approved');
            $table->date('date_rejected');
            $table->string('comments');
            $table->integer('paper_type_id');
            $table->integer('offset_type_id');
            $table->integer('lamination_type_id');
            $table->integer('binding_type_id');
            $table->integer('diecutting_type_id');
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
        Schema::dropIfExists('quotations');
    }
}
