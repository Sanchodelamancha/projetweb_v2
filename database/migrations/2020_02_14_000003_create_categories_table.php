<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'categories';

    /**
     * Run the migrations.
     * @table categories
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_categorie');
            $table->string('nom_categorie', 45)->unique();
            $table->unsignedInteger('annonce_id_categorie');

            $table->index(["annonce_id_categorie"], 'fk_categorie_annonce1_idx');


            $table->foreign('annonce_id_categorie', 'fk_categorie_annonce1_idx')
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
