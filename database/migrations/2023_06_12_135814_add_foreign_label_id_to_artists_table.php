<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            //add the column
            $table->unsignedBigInteger('label_id')->nullable()->after('id');

            $table->foreign('label_id')->references('id')->on('labels')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->dropForeign('artists_label_id_foreign');

            $table->dropColumn('label_id');

        });
    }
};
