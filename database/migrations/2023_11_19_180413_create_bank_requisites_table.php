<?php

use App\Models\Company;
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
        Schema::create('bank_requisites', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class);
            $table->string('name');
            $table->string('checkAccount');
            $table->string('corrAccount');
            $table->string('bik');
            $table->string('ogrn');
            $table->string('okpo');
            $table->string('okato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_requisites');
    }
};
