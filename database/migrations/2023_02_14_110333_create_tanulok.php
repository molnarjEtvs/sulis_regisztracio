<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanulok', function (Blueprint $table) {
            $table->id("t_id");
            $table->string("oktatasi_azonosito",11);
            $table->string("tajszam",9);
            $table->string("tanulo_adoazonosito_jel",10);
            $table->string("tanulo_emailcim",100);
            $table->string("tanulo_vezeteknev",100);
            $table->string("tanulo_keresztnev",100);
            $table->string("tanulo_szuletesi_hely",100);
            $table->date("tanulo_szuletesi_ido");
            $table->string("tanulo_allando_lh_irsz",10);
            $table->string("tanulo_allando_lh_telepules",100);
            $table->string("tanulo_allando_lh_kozterulet_nev",100);
            $table->string("tanulo_allando_lh_kozterulet_jellege",100);
            $table->string("tanulo_allando_lh_kozterulet_hazszam",30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanulok');
    }
};
