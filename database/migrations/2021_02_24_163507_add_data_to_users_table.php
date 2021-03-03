<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('login');
            $table->string('phone', 25)->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->text('description')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->string('birthday')->nullable();
            $table->string('surname')->nullable();

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
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
            $table->dropColumn([
                'login', 'phone', 'image', 'active', 'description', 'role_id', 'birthday', 'surname'
            ]);
        });
    }
}
