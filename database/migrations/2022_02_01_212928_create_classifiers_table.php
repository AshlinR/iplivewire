<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassifiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classifiers', function (Blueprint $table) {
            $table->id();
            $table->string('value', 45)->nullable();
            // $table->char('classifierType_id', 5)->comment('Type of classifier');
            // $table->char('jurisdiction_id', 2)->nullable()->comment('The jurisdiction the classifier is attached to');
            // $table->foreignId('matter_id')->nullable()->comment('The matter the classifier note is attached to');
            $table->foreignId('actor_id')->nullable()->comment('The actor the classifier is attached to');
            // $table->foreignId('creator')->nullable()->comment('User id who created the record');
            // $table->foreignId('updater')->nullable()->comment('User id who last updated the record');
            $table->string('notes', 45)->nullable()->comment('Notes on this classifier');
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
        Schema::dropIfExists('classifiers');
    }
}
