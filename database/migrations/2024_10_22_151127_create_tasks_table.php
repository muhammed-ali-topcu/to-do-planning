<?php

use App\Models\Developer;
use App\Models\Provider;
use App\Models\Sprint;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('custome_id')->comment('id provided by provider');
            $table->foreignIdFor(Provider::class);
            $table->foreignIdFor(Developer::class)->nullable();
            $table->foreignIdFor(Sprint::class)->nullable();
            $table->float('estimated_duration');
            $table->float('difficulty');
            $table->float('score')->default(0)->comment('score = difficulty * estimated_duration');
            $table->float('duration_for_developer')->default(0)->nullable();
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
