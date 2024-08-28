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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Primary key ID
            $table->string('name'); // Name of the commenter
            $table->string('email'); // Email of the commenter
            $table->string('phone'); // Phone number of the commenter
            $table->string('option'); // Selected option
            $table->text('message'); // Message content
            $table->boolean('admin_approval')->default(false); // Admin approval status, default is false (not approved)
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
