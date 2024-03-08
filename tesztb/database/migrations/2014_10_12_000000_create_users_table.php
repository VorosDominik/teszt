<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('osztaly_id')->references('id')->on('osztalies');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(
            ['name' => 'Kis Péter', 'email' => 'kp@gmail.com', 'password' => 'asd123', 'osztaly_id' => '1',] );
            User::create( ['name' => 'Nagy Péter', 'email' => 'np@gmail.com', 'password' => 'asd123', 'osztaly_id' => '1',] );
            User::create( ['name' => 'Magas Péter', 'email' => 'mp@gmail.com', 'password' => 'asd123', 'osztaly_id' => '1',], );
            User::create(['name' => 'Tigris Péter', 'email' => 'tp@gmail.com', 'password' => 'asd123', 'osztaly_id' => '2',] );
            User::create(['name' => 'Oroszlán Péter', 'email' => 'op@gmail.com', 'password' => 'asd123', 'osztaly_id' => '2',] );
            User::create(['name' => 'Jaguár Péter', 'email' => 'jp@gmail.com', 'password' => 'asd123', 'osztaly_id' => '2',] );
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
