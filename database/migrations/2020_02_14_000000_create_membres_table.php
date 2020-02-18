<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'membres';

    /**
     * Run the migrations.
     * @table membres
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_membre');
            $table->string('nom', 45);
            $table->string('prenom', 45);
            $table->string('telephone', 45);
            $table->timestamp('date_inscription')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('nom_entreprise', 45)->nullable();
            $table->string('numero_entreprise', 45)->nullable();
            $table->string('lien_siteweb', 45)->nullable();
            $table->string('lien_facebook', 45)->nullable();
            $table->string('lien_linkedin', 45)->nullable();
            $table->tinyInteger('fermer_projet')->nullable()->default('0');
            $table->tinyInteger('profil_or')->nullable()->default('0');
            $table->string('rue', 45);
            $table->string('ville', 45);
            $table->unsignedInteger('user_id_membre');

            $table->index(["user_id_membre"], 'fk_Membres_Users1_idx');

            $table->unique(["id_membre"], 'idmembres_UNIQUE');


            $table->foreign('user_id_membre', 'fk_Membres_Users1_idx')
                ->references('id_user')->on('users')
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
