<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodataSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
        ['stage_name' => 'seunghan',
        'birth_name' => 'Hong Seunghan',
        'birthday' => '2 October 2003',
        'height' => 178,
        'nationality' => 'korean'
        ],
        ['stage_name' => 'shotaro',
        'birth_name' => 'Osaki Shotaro',
        'birthday' => '25 November 2000',
        'height' => 178,
        'nationality' => 'japanese'
        ],
        ['stage_name' => 'Eunseok',
        'birth_name' => 'Song Eunseok',
        'birthday' => '19 March 2001',
        'height' => 180,
        'nationality' => 'korean'
        ],
        ['stage_name' => 'sungchan',
        'birth_name' => 'Jung Sungchan',
        'birthday' => '13 September 2001',
        'height' => 185,
        'nationality' => 'korean'
        ],
        ['stage_name' => 'wonbin',
        'birth_name' => 'Park Wonbin',
        'birthday' => '2 March 2002',
        'height' => 0,
        'nationality' => 'korean'
        ],
        ['stage_name' => 'sohee',
        'birth_name' => 'Lee Sohee',
        'birthday' => '21 November 2003',
        'height' => 176,
        'nationality' => 'korean'
        ],
        ['stage_name' => 'anton',
        'birth_name' => 'Lee Chanyoung',
        'birthday' => '21 March 2004',
        'height' => 178,
        'nationality' => 'korean'
        ]

        ])->each(fn($member)=> Biodata::create($member));

    }
}
