<?php

use App\Models\bejegyzesek;
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
        Schema::create('bejegyzeseks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevenyseg_id')->references('id')->on('tevekenysegeks');
            $table->foreignId('osztaly_id')->references('id')->on('osztalies');
            $table->boolean('allapot');
            $table->timestamps();
        });
        bejegyzesek::create(
            ['tevenyseg_id' => '1', 'osztaly_id' => '1', 'allapot' => '0'],
        );
        bejegyzesek::create(['tevenyseg_id' => '2', 'osztaly_id' => '1', 'allapot' => '0']);
        bejegyzesek::create(['tevenyseg_id' => '4', 'osztaly_id' => '1', 'allapot' => '1']);
        bejegyzesek::create(['tevenyseg_id' => '4', 'osztaly_id' => '1', 'allapot' => '0']);
        bejegyzesek::create(['tevenyseg_id' => '5', 'osztaly_id' => '1', 'allapot' => '1']);
        bejegyzesek::create(['tevenyseg_id' => '5', 'osztaly_id' => '1', 'allapot' => '1']);
        bejegyzesek::create(['tevenyseg_id' => '5', 'osztaly_id' => '2', 'allapot' => '0']);
        bejegyzesek::create(['tevenyseg_id' => '9', 'osztaly_id' => '2', 'allapot' => '1']);
        bejegyzesek::create(['tevenyseg_id' => '10', 'osztaly_id' => '2', 'allapot' => '1']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzeseks');
    }
};
