<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{

    protected $schema;

    public function __construct(Schema $schema) 
    {
        $this->schema = $schema;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up_FailedJob()
    {
        $this->schema->create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->dropIfExists('failed_jobs');
    }
}
