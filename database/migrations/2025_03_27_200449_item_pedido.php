<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('item_pedido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained()->onDelete('cascade');
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table->integer('quantidade')->default(1);
            $table->decimal('preco_unidade', 10, 2);
            $table->timestamps();

            // Garante que cada combinação de order_id e item_id seja única
            $table->unique(['pedido_id', 'item_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_pedido');
    }
};
