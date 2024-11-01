<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResisTable extends Migration
{
    public function up()
    {
        Schema::create('resis', function (Blueprint $table) {
            $table->id();
            $table->string('noResi')->unique();
            $table->string('kotaTujuan');
            $table->string('perusahaan');
            $table->date('tanggalDiterima');
            $table->string('status')->default('In Transit');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resis');
    }
}
