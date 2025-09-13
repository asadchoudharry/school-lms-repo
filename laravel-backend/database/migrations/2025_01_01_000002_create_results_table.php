<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration {
    public function up() {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_session_id')->nullable();
            $table->foreignId('student_id')->nullable();
            $table->decimal('total_marks',6,2)->default(0);
            $table->decimal('obtained_marks',6,2)->default(0);
            $table->decimal('percentage',5,2)->default(0);
            $table->decimal('gpa',3,2)->nullable();
            $table->string('grade')->nullable();
            $table->text('ai_feedback')->nullable();
            $table->timestamps();
        });

        Schema::create('result_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('result_id')->constrained('results')->onDelete('cascade');
            $table->foreignId('subject_id')->nullable();
            $table->decimal('marks_obtained',5,2)->default(0);
            $table->decimal('max_marks',5,2)->default(100);
        });
    }
    public function down(){ Schema::dropIfExists('result_items'); Schema::dropIfExists('results'); }
}
