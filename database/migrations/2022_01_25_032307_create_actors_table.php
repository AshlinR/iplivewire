<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index('name')->unique('uq_name')->comment('Short name or company name');
            $table->string('first_name', 30)->nullable();
            $table->string('last_name', 30)->nullable();
            $table->string('middle_name', 30)->nullable();
            $table->boolean('phy_person')->default(0)->comment('Physical person or not');
            $table->string('email', 60)->nullable()->comment('Primary email address');
            $table->string('address_line1', 60)->nullable();
            $table->string('address_line2', 60)->nullable();
            $table->string('address_line3', 60)->nullable();
            $table->string('state', 20)->nullable();
            $table->string('city', 20)->nullable();
            $table->string('postcode', 12)->nullable();
            $table->boolean('warn')->default(0)->comment('The actor will be displayed in warn colour if true');
            $table->foreignId('creator')->nullable()->comment('User id who created the record');
            $table->foreignId('updater')->nullable()->comment('User id who last updated the record');
            $table->text('notes', 65535)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors');
    }
}
