<?php

namespace Database\Seeders;

use App\Models\Home\HomeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getDefaultHomeCategories() as $category) {
            HomeCategory::firstOrCreate(['name' => $category[0]], [
                'icon' => $category[1]
            ]);
        }
    }

    public function getDefaultHomeCategories(): array
    {
        return [
            [
                'Cine',
                'https://i.imgur.com/DH45rww.png'
            ],
            [
                'Bling Alphabet',
                'https://i.imgur.com/miq0Aiv.png'
            ],
            [
                'Keep it Real',
                'https://i.imgur.com/pmSUjjP.png'
            ],
            [
                'Summer Vacation',
                'https://i.imgur.com/abzSMEH.gif'
            ],
            [
                'Studio MTV',
                'https://i.imgur.com/Q3hmF7w.png'
            ],
            [
                'Pirates',
                'https://i.imgur.com/XTRzzsI.png'
            ],
            [
                'Plastic Alphabet',
                'https://i.imgur.com/A3VBOq9.png'
            ],
            [
                'Valentine',
                'https://i.imgur.com/K0HqFx4.png'
            ],
            [
                'Wooden Alphabet',
                'https://i.imgur.com/ziDIYgy.png'
            ],
            [
                'Buttons',
                'https://i.imgur.com/lzfYaYp.png'
            ],
            [
                'Alhambra',
                'https://i.imgur.com/Jry4aC6.png'
            ],
            [
                'Sports',
                'https://i.imgur.com/BDCtism.png'
            ],
            [
                'WWE',
                'https://i.imgur.com/ML7YRub.png'
            ],
            [
                'Paintings',
                'https://i.imgur.com/UCvX3St.png'
            ],
            [
                'Dividers',
                'https://i.imgur.com/vgjnpff.png'
            ],
            [
                'Battle Banzai',
                'https://i.imgur.com/Uzht4OK.png'
            ],
            [
                'SnowStorm',
                'https://i.imgur.com/oevdfAb.png'
            ],
            [
                'Halloween',
                'https://i.imgur.com/NibQAwu.png'
            ],
            [
                'Coins and Related',
                'https://i.imgur.com/vYp3zVW.png'
            ],
            [
                'Easter and Animals',
                'https://i.imgur.com/vb7KopB.png'
            ],
            [
                'KungFu Panda',
                'https://i.imgur.com/fWdwdgd.png'
            ]
        ];
    }
}
