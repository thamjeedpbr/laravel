<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        File::truncate();

        $File = new File();
        $File->name = 'Filled NorthTec international registration form';
        $File->value = 'Filled NorthTec international registration form';
        $File->step = 2;
        $File->save();

        $File = new File();
        $File->name = 'Verified/Attested Passport copies';
        $File->value = 'Verified/Attested Passport copies';
        $File->step = 2;
        $File->save();

        $File = new File();
        $File->name = 'OET/IELTS score sheets (Please allow NorthTec to access and verify your OET scores online)';
        $File->value = 'OET/IELTS score sheets';
        $File->step = 2;
        $File->save();

        $File = new File();
        $File->name = 'Latest CV with at least 2 recent reference';
        $File->value = 'Latest CV';
        $File->step = 2;
        $File->save();

        $File = new File();
        $File->name = 'Decision letter from New Zealand nursing council';
        $File->value = 'Decision letter from New Zealand nursing council';
        $File->step = 2;
        $File->save();

        $File = new File();
        $File->name = 'Main nursing degree registration certificates (Syllabus and marksheets not required)';
        $File->value = 'Main nursing degree registration certificates';
        $File->step = 2;
        $File->save();

        $File = new File();
        $File->name = 'Work experience certificates';
        $File->value = 'Work experience certificates';
        $File->step = 2;
        $File->save();

        $File = new File();
        $File->name = 'Covid Vaccination proof';
        $File->value = 'Covid Vaccination proof';
        $File->step = 2;
        $File->save();

        $File = new File();
        $File->name = 'Tuition fees payment (please attach payment slip)';
        $File->value = 'Tuition fees payment';
        $File->step = 3;
        $File->save();

        $File = new File();
        $File->name = 'Attach occupational health screening completed form as directed in the offer of place';
        $File->value = 'Attach occupational health screening completed form as directed in the offer of place';
        $File->step = 3;
        $File->save();

        $File = new File();
        $File->name = 'Attach Police clearance certificate';
        $File->value = 'Attach Police clearance certificate';
        $File->step = 3;
        $File->save();

    }
}
