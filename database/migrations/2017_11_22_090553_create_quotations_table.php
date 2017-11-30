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
            $table->foreign('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->double('amount_quoted');
            $table->date('date_submitted');
            $table->date('date_approved');
            $table->date('date_rejected');
            $table->mediumText('comments');

            $table->integer('paper_type_id')->unsigned();
            $table->foreign('paper_type_id')->references('id')->on('paper_types');
            $table->integer('offset_type_id')->unsigned();
            $table->foreign('offset_type_id')->references('id')->on('offset_types');
            $table->integer('lamination_type_id')->unsigned();
            $table->foreign('lamination_type_id')->references('id')->on('lamination_types');
            $table->integer('binding_type_id')->unsigned();
            $table->foreign('binding_type_id')->references('id')->on('binding_types');
            $table->integer('diecutting_type_id')->unsigned();
            $table->foreign('diecutting_type_id')->references('id')->on('diecutting_types');
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
