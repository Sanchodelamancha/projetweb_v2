<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVilleAnnonceTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ville_annonce';

    /**
     * Run the migrations.
     * @table ville_annonce
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_ville');
            $table->string('nom_ville', 45);
            $table->unsignedInteger('Annonces_id_annonce');

            $table->index(["Annonces_id_annonce"], 'fk_Ville_Annonce_Annonces1_idx');


            $table->foreign('Annonces_id_annonce', 'fk_Ville_Annonce_Annonces1_idx')
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
