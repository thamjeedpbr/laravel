<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('fullname');
            $table->string('qualification');
            $table->string('experience')->nullable();
            $table->string('OET_or_IELTS_Score');
            $table->string('CGFNS_status');
            $table->string('New_Zealand_nursing_council')->nullable();
            $table->string('preferred_Campus')->nullable();
            $table->string('Preferred_intake')->nullable();
            $table->string('refereal_method')->nullable();
            $table->string('Friends_Family_NZ_status')->nullable();
            $table->string('Friends_Family_NZ')->nullable();
            $table->longText('Cover_letter')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->text('street_address')->nullable();
            $table->text('address_line')->nullable();
            $table->text('address_city')->nullable();
            $table->string('address_state');
            $table->string('address_country');
            $table->string('address_zip')->nullable();
            $table->text('working_address_india')->nullable();
            $table->text('working')->nullable();
            $table->integer('status')->default(0);
            $table->string('docs_status')->nullable();
            $table->text('docs_comments')->nullable();
            $table->string('immigration_advise')->nullable();
            $table->string('airport_accommodation')->nullable();

            $table->text('feedback')->nullable();

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
        Schema::dropIfExists('candidates');
    }
}
