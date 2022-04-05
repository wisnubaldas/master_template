<?php
namespace App\Traits;

trait MenuTrait {
    public $icon_two = <<<END
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                            <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                        </svg>
                       END;
    public $icon_one = <<<END
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/>
                                <path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/>
                            </svg>
                        END;
    public function index() {
        $str = '';
        foreach ($this->data_menu() as $key => $value) {
            if (isset($value['sub_menu'])) {
                $str .= <<<END
                        <li aria-haspopup="true">
                            <a href="{$value['link']}" class="">
                                {$value['icon']}
                                {$value['name']}
                                <i class="fe fe-chevron-down horizontal-icon"></i>
                            </a>
                            {$this->sub_menu($value['sub_menu'])}
                        </li>
                    END;
            } else {
                $str .= <<<END
                        <li aria-haspopup="true">
                            <a href="{$value['link']}" class="">
                            {$value['icon']}
                            {$value['name']}
                            </a>
                        </li>
                        END;
            }
        }
        return $str;
    }
    public function sub_menu($sub_menu)
    {
        $s = '';
        foreach ($sub_menu as $key => $value) {
            if (isset($value['sub_menu'])) {
                $s = '<ul class="sub-menu">';
                $s .= <<<END
                        <li aria-haspopup="true">
                            <a href="{$value['link']}" class="slide-item"> 
                                {$value['name']}
                            </a>
                        END;
                $s .= $this->sub_menu($value['sub_menu']);
                $s .=  '</li>';
                $s .= '</ul>';
            } else {
                $s = '<ul class="sub-menu">';
                $s .= <<<END
                        <li aria-haspopup="true">
                            <a href="{$value['link']}" class="slide-item"> 
                                {$value['name']}
                            </a>
                        </li>
                    END;
                $s .= '</ul>';
            }
        }
        return $s;   
    }

    public function data_menu()
    {
        return [
            [
                'name'=>'Dasboard',
                'link'=>'/',
                'icon'=>$this->icon_one
            ],  
            [
                'name'=>'Dua',
                'link'=>'#',
                'icon'=>$this->icon_two,
                'sub_menu'=>[
                    [
                        'name'=>'sub Dua Satu',
                        'link'=>'#',
                        'icon'=>$this->icon_two,
                    ],
                    [
                        'name'=>'sub Dua Dua',
                        'link'=>'#',
                        'icon'=>$this->icon_two,
                        'sub_menu'=>[
                            [
                                'name'=>'sub Dua Dua Satu',
                                'link'=>'#',
                                'icon'=>$this->icon_two,
                            ],
                            [
                                'name'=>'sub Dua Dua Dua',
                                'link'=>'#',
                                'icon'=>$this->icon_two,
                            ],
                        ]
                    ]
                ]
            ]
        ];
    }
    
}