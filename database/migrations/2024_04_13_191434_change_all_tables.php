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
        Schema::table('all_tables', function (Blueprint $table) {
            // $table->text('name', 300)->change();
            // $table->renameColumn('visitor', 'visitor_ip_address');
            // $table->dropColumn('created_date');
            // $table->string('email')->after('id');
            $table->dropColumn('confirmed');
        });
    }

    /**clear
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
