<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Challenger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Address', function (Blueprint $table) {
            $table->increments('AddressID');
            $table->string('FullStreetAddress')->default('');
            $table->string('City')->default('');
            $table->string('StateOrProvince')->default('');
            $table->string('PostalCode', 20)->default('');
            $table->string('Country', 100)->default('');
        });

        Schema::create('Listing', function (Blueprint $table) {
            $table->increments('ListingID');
            $table->integer('AddressID');
            $table->foreign('AddressID')
                ->references('AddressID')
                ->on('Address')
                ->onDelete('cascade');
            $table->string('ListPrice')->default('');
            $table->string('ListingURL')->default('');
            $table->integer('Bedrooms')->unsigned()->default(0);
            $table->integer('Bathrooms')->unsigned()->default(0);
            $table->string('PropertyType', 100) ->default('');
            $table->string('ListingKey', 100)->default('');
            $table->string('ListingCategory', 100)->default('');
            $table->string('ListingStatus', 100)->default('');
        });
        Schema::create('Photo', function (Blueprint $table) {
            $table->increments('PhotoID');
            $table->integer('AddressID');
            $table->foreign('AddressID')
                ->references('AddressID')
                ->on('Address')
                ->onDelete('cascade');
            $table->string('MediaModificationTimestamp')->default('');
            $table->string('MediaURL')->default('');
        });

        Schema::create('Description', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('AddressID');
            $table->foreign('AddressID')
                ->references('AddressID')
                ->on('Address')
                ->onDelete('cascade');
            $table->boolean('DiscloseAddress')->default(false);
            $table->string('ListingDescription')->default('');
        });

        Schema::create('MLS', function (Blueprint $table) {
            $table->string('MlsID')->default('');
            $table->integer('AddressID');
            $table->foreign('AddressID')
                ->references('AddressID')
                ->on('Address')
                ->onDelete('cascade');
            $table->string('MlsName')->default('');
            $table->string('MlsNumber')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Address');
        Schema::drop('Listing');
        Schema::drop('Photo');
    }
}
