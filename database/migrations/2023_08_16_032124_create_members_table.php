<?php

use Illuminate\Database\Migrations\Migration;
use Core\Providers\Facades\Schema\CustomBlueprint as Blueprint;
use Core\Providers\Facades\Schema\CustomSchema as Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('type', 1);
            $table->string('name', 255);
            $table->string('address', 512);
            $table->string('email', 128);
            $table->string('password', 64);
            $table->char('status', 1)->default(1);
            $table->string('google_id')->nullable()->comment('Google ID');
            $table->string('facebook_id')->nullable()->comment('Facebook ID');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
