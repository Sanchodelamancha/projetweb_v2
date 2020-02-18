<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'messages';

    /**
     * Run the migrations.
     * @table messages
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_message');
            $table->string('sujet', 45)->nullable();
            $table->text('message');
            $table->timestamp('date_envoie')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedInteger('Annonce_id_annonce');
            $table->unsignedInteger('Membre_id_expediteur');
            $table->unsignedInteger('Membre_id_destinataire');

            $table->index(["Membre_id_expediteur"], 'fk_Messages_Membres2_idx');

            $table->index(["Annonce_id_annonce"], 'fk_Messages_Annonces1_idx');

            $table->index(["Membre_id_destinataire"], 'fk_Messages_Membres1_idx');

            $table->unique(["id_message"], 'id_messagerie_UNIQUE');


            $table->foreign('Annonce_id_annonce', 'fk_Messages_Annonces1_idx')
                ->references('id_annonce')->on('annonces')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Membre_id_expediteur', 'fk_Messages_Membres2_idx')
                ->references('id_membre')->on('membres')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Membre_id_destinataire', 'fk_Messages_Membres1_idx')
                ->references('id_membre')->on('membres')
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
