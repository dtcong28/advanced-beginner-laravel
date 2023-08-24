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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('user_id');
            $table->integer('client_id');
            $table->integer('project_id');
            $table->date('deadline');
            $table->integer('status')->default(1);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
