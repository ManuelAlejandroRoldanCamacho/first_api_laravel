<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('category_users', function(Blueprint $table){
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('category_users', function(Blueprint $table){
            $table->dropForeign(['category_id']);
            $table->dropForeign(['user_id']);
        });
    }
};
