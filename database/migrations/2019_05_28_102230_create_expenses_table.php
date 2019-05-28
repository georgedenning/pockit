<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->decimal('amount', 10, 4);
            $table->decimal('paid', 10, 4);
            $table->set('frequency', ['singular', 'weekly', 'monthly', 'yearly']);
            $table->set('status', ['pending', 'partial', 'sent', 'rejected', 'cancelled']);
            $table->unsignedBigInteger('recipient_id');
            $table->foreign('recipient_id')->references('id')->on('accounts');
            $table->timestamp('due_at')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
