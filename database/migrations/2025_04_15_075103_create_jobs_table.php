<?php

use App\Models\Job;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedInteger('salary');
            $table->string('location')->nullable();
            $table->string('jobtypes');
            $table->enum('experience', Job::$experience);
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('posted_by');
            $table->timestamp('posted_at')->useCurrent();
            $table->timestamp('closing_at')->nullable();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('posted_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
