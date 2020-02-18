<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'annonces';

    /**
     * Run the migrations.
     * @table annonces
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_annonce');
            $table->string('nom_annonce', 45);
            $table->string('type_annonce', 45);
            $table->timestamp('date_creation')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('type_projet', 45)->nullable();
            $table->text('description')->nullable();
            $table->float('prix')->nullable();
            $table->string('lien_photo', 45)->nullable();
            $table->string('lieu_realisation', 45)->nullable();

            $table->unique(["id_annonce"], 'id_annonce_UNIQUE');
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
