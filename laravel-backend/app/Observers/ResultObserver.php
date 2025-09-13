<?php
namespace App\Observers;
use App\Models\Result;
use App\Models\GradeScale;

class ResultObserver {
    public function saving(Result $result) {
        if ($result->total_marks > 0) {
            $result->percentage = round(($result->obtained_marks / $result->total_marks) * 100, 2);
            $grade = GradeScale::where('min_percentage','<=',$result->percentage)
                ->where('max_percentage','>=',$result->percentage)->first();
            if ($grade) {
                $result->grade = $grade->grade;
                $result->gpa = $grade->gpa;
                $result->status = ($grade->grade === 'F') ? 'fail' : 'pass';
            }
        }
        if ($result->gpa !== null) {
            if ($result->gpa < 2.0) {
                $result->ai_feedback = 'Focus on fundamentals. Schedule weekly tutoring and practice past papers.';
            } elseif ($result->gpa >= 3.5) {
                $result->ai_feedback = 'Excellent performance — consider advanced materials.';
            } else {
                $result->ai_feedback = 'Keep improving: identify weak subjects and practice targeted quizzes.';
            }
        }
    }
}
