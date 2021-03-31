<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->text('description')->nullable();
            $table->string('mobile_no',100)->nullable();
            $table->string('image',100)->nullable();
            $table->string('email',100)->nullable();
            $table->text('address')->nullable();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        Schema::create('product_vendor', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->integer('vendor_id')->nullable();
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
        Schema::dropIfExists('vendors');
        Schema::dropIfExists('product_vendor');
    }
}
