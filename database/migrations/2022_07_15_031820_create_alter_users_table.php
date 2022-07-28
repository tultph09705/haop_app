<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->string('username')->nullable();
            $table->string('image')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('intro')->nullable();
            $table->string('role')->default(0);
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('image');
            $table->dropColumn('birthday');
            $table->dropColumn('gender');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('intro');
            $table->dropColumn('role');
            $table->dropSoftDeletes();
        });
    }
}
