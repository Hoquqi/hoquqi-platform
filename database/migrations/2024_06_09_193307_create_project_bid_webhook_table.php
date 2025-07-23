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
        Schema::create('project_bid_webhooks', function (Blueprint $table) {
            $table->id();
            $table->string('payment_method', 60);
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('bid_id')->index();
            $table->unsignedBigInteger('project_id')->index();
            $table->unsignedBigInteger('subscription_id')->index();
            $table->string('amount', 20);
            $table->enum('status', ['succeeded', 'failed', 'pending'])->default('pending');
            $table->timestamp('created_at');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign('bid_id')->references('id')->on('project_bids')->onUpdate('no action')->onDelete('no action');
            $table->foreign('subscription_id')->references('id')->on('project_bid_upgrades')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_bid_webhooks');
    }
};
