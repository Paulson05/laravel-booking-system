<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('roles_id');
            $table->unsignedBigInteger('permissions_id');


//            $table->foreign('roles_id')->references('id')->on('roles')->cascadeOnDelete();
//            $table->foreign('permission_id')->references('id')->on('permissions')->cascadeOnDelete();
//            $table->primary(['roles_id','permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_permissions');
    }
}
