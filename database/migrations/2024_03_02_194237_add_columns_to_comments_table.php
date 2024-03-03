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
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->after('id');
            $table->foreignId('post_id')->constrained()->onDelete('cascade')->after('user_id');
            $table->unsignedBigInteger('parent_comment_id')->nullable()->after('post_id');
            $table->text('content')->before('timestamps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('post_id');
            $table->dropColumn('parent_comment_id');
            $table->dropColumn('content');
        });
    }
};
