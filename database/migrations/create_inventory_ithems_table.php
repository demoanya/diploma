<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryIthemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_ithems', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->characterVarying('categories_id', 255);
            $table->characterVarying('name_ithems', 255);
            $table->characterVarying('image', 255);
            $table->text('about');
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_ithems');
    }
}
