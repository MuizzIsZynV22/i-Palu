<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->string('serial_number')->primary(); // Using string as primary key
            $table->enum('category', ['kompang', 'jidur', 'djembe']);
            $table->enum('condition', ['baru', 'simpanan', 'rosak', 'hilang']);
            $table->text('notes')->nullable();
            $table->date('date_obtained');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventory');
    }
};