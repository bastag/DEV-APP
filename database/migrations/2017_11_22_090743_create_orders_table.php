<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->integer('sales_agent_id')->unsigned();
            $table->foreign('sales_agent_id')->references('id')->on('sales_agents');
            $table->string('job_name');
            $table->string('job_type');
            $table->integer('quantity');
            $table->integer('page_count');
            $table->string('cover_paper_type');
            $table->string('inside_paper_type');
            $table->string('cover_color');
            $table->string('inside_color');
            $table->date('date_due');
            $table->integer('size_type_id');
            $table->integer('lamination_type_id');
            $table->integer('binding_type_id');
            $table->integer('paper_type_id');
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
        Schema::dropIfExists('orders');
    }
}
