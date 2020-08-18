<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create(
            'users',
            function (Blueprint $table): void {
                $table->uuid();
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->foreignId('profile_id')->constrained();
                $table->boolean('activated')->default(false);
                $table->boolean('banned')->default(false);                
                $table->rememberToken();
                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
