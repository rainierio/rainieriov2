<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('Users', function (Blueprint $table) {
            $table->string('bio')->nullable()->after('password');
            $table->enum('role', ['admin', 'user'])->nullable()->after('bio');
            $table->string('profile_picture')->nullable()->after('role');
            $table->json('social_links')->nullable()->after('profile_picture');
        });
    }

    public function down(): void
    {
        Schema::table('Users', function (Blueprint $table) {
            //
        });
    }
};
