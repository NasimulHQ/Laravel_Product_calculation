<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('billNo')->unique();
            $table->foreignId('customerId')->nullable()->constrained('Customers', 'id')->onDelete('cascade');
            $table->float('totalDiscount')->nullable();
            $table->float('totalBillAmount')->nullable();
            $table->float('dueAmount')->nullable();
            $table->float('paidAmount')->nullable();
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
        Schema::dropIfExists('inventories');
    }
}
