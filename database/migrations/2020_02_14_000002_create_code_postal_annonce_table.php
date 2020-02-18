<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodePostalAnnonceTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'code_postal_annonce';

    /**
     * Run the migrations.
     * @table code_postal_annonce
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_code_postal');
            $table->string('code_postal_annonce', 45);
            $table->unsignedInteger('Annonces_id_annonce');

            $table->index(["Annonces_id_annonce"], 'fk_Code_Postal_Annonce_Annonces1_idx');


            $table->foreign('Annonces_id_annonce', 'fk_Code_Postal_Annonce_Annonces1_idx')
                ->references('id_annonce')->on('annonces')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
