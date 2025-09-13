<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\GradeScale;

class GradeScaleSeeder extends Seeder {
    public function run() {
        $grades = [
            ['grade'=>'A+','min_percentage'=>90,'max_percentage'=>100,'gpa'=>4.0],
            ['grade'=>'A','min_percentage'=>80,'max_percentage'=>89,'gpa'=>3.7],
            ['grade'=>'B+','min_percentage'=>70,'max_percentage'=>79,'gpa'=>3.3],
            ['grade'=>'B','min_percentage'=>60,'max_percentage'=>69,'gpa'=>3.0],
            ['grade'=>'C','min_percentage'=>50,'max_percentage'=>59,'gpa'=>2.5],
            ['grade'=>'D','min_percentage'=>40,'max_percentage'=>49,'gpa'=>2.0],
            ['grade'=>'F','min_percentage'=>0,'max_percentage'=>39,'gpa'=>0.0],
        ];
        foreach ($grades as $g) { GradeScale::updateOrCreate(['grade'=>$g['grade']], $g); }
    }
}
