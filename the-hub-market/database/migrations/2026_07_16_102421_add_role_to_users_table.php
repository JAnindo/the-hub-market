<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['buyer', 'seller', 'admin'])->default('buyer')->after('password');
            $table->boolean('is_verified')->default(false)->after('role');
            $table->boolean('is_suspended')->default(false)->after('is_verified');
            $table->text('delivery_address')->nullable()->after('is_suspended');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'is_verified', 'is_suspended', 'delivery_address']);
        });
    }
};