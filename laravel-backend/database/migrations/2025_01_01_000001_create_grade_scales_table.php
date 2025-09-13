<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeScalesTable extends Migration {
    public function up() {
        Schema::create('grade_scales', function (Blueprint $table) {
            $table->id();
            $table->string('grade');
            $table->integer('min_percentage');
            $table->integer('max_percentage');
            $table->decimal('gpa',3,2);
        });
    }
    public function down(){ Schema::dropIfExists('grade_scales'); }
}
