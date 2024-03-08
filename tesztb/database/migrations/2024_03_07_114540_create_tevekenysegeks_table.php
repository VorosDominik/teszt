<?php

use App\Models\tevekenysegek;
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
        Schema::create('tevekenysegeks', function (Blueprint $table) {
            $table->id();
            $table->String('teveknyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });

        tevekenysegek::create(
            ['teveknyseg_nev' => 'kerékpárral jöttem iskolába', 'pontszam' => '10']
        );
        tevekenysegek::create(['teveknyseg_nev' => 'rollerrel jöttem iskolába', 'pontszam' => '9']);
        tevekenysegek::create(['teveknyseg_nev' => '10 km-t gyalogoltam buszozás helyett', 'pontszam' => '8']);
        tevekenysegek::create(['teveknyseg_nev' => 'ültettem fát', 'pontszam' => '5']);
        tevekenysegek::create(['teveknyseg_nev' => 'ültettem virágot', 'pontszam' => '6']);
        tevekenysegek::create(['teveknyseg_nev' => 'ültettem egyéb növényt', 'pontszam' => '13']);
        tevekenysegek::create(['teveknyseg_nev' => 'kevesebb vizet használtam a fürdéshez', 'pontszam' => '15']);
        tevekenysegek::create(['teveknyseg_nev' => 'összeszedtem a szemetet egy közterületen, erdőben, stb', 'pontszam' => '16']);
        tevekenysegek::create(['teveknyseg_nev' => 'tartós szatyorba vásároltam, nem nylonba', 'pontszam' => '17']);
        tevekenysegek::create(['teveknyseg_nev' => 'nem használtam egyszer használatos műanyagot', 'pontszam' => '20']);
        tevekenysegek::create(['teveknyseg_nev' => 'tartós csomagolású terméket vásároltam – pl üvegbe vettem a tejet, nem használtam pet palackot, ', 'pontszam' => '10']);
        tevekenysegek::create(['teveknyseg_nev' => 'környezetbarát csomagolású terméket vásároltam', 'pontszam' => '11']);
        tevekenysegek::create(['teveknyseg_nev' => 'kevesebb húst ettem a héten', 'pontszam' => '10']);
        tevekenysegek::create(['teveknyseg_nev' => 'ökológiai gazdaságból származó élelmiszert vettem', 'pontszam' => '12']);
        tevekenysegek::create(['teveknyseg_nev' => 'kirándultam, szabadban töltöttem időt a héten', 'pontszam' => '13']);
        tevekenysegek::create(['teveknyseg_nev' => 'kevesebb ruhát/terméket vásároltam a héten, hogy fenntarthatóbb legyen a környeztünk!', 'pontszam' => '25']);
        tevekenysegek::create(['teveknyseg_nev' => 'önkénteskedtem a Greenpeace-nél, vagy más zöld szervezetnél', 'pontszam' => '19']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegeks');
    }
};
