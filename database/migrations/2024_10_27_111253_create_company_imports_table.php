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
        Schema::create('company_imports', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('person_name');
            $table->string('person_first_name');
            $table->string('person_last_name');
            $table->string('person_phone')->unique();
            $table->string('person_email')->unique();
            $table->string('person_job_title');
            $table->string('organization_name');
            $table->string('organization_address');
            $table->string('deal_title');
            $table->integer('deal_value');
            $table->string('deal_currency_of_value');
            $table->string('activity_subject');
            $table->date('activity_due_date');
            $table->string('note_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_imports');
    }
};
