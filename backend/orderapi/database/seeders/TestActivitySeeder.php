<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Technician;
use App\Models\TypeActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestActivitiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeActivity = TypeActivity::find(1);
        // SELECT * FROM technician WHERE document = 989898
        $technician = Technician::where('document', '=',989898)->first();

        $activity = new Activity();
        $activity->description = 'Test Activity';
        $activity->hours = 10;
        $activity->technician_id = $technician->document;
        $activity->type_id = $typeActivity->id;
        $activity->save();

    }


}
