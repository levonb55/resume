<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormattingToCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('credentials', function (Blueprint $table) {
            $table->string('font_family')->nullable();
            $table->integer('font_size')->nullable();
            $table->integer('heading_size')->nullable();
            $table->integer('section_spacing')->nullable();
            $table->integer('par_spacing')->nullable();
            $table->integer('line_spacing')->nullable();
            $table->integer('tb_margin')->nullable();
            $table->integer('side_margin')->nullable();
            $table->integer('par_indent')->nullable();
            $table->integer('font_weight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('credentials', function (Blueprint $table) {
            $table->dropColumn([
                'font_family','font_size','heading_size','section_spacing','par_spacing','line_spacing',
                'tb_margin','side_margin','par_indent','font_weight'
            ]);
        });
    }
}
