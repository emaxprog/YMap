<?php namespace Em\Ymap\Components;

use Cms\Classes\ComponentBase;

class Map extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Map Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'latitude' => [
                'title' => 'Широта',
                'default' => 51.506767,
                'type' => 'string',
            ],
            'longitude' => [
                'title' => 'Долгота',
                'default' => -0.122205,
                'type' => 'string',
            ],
            'zoom' => [
                'title' => 'Масштаб',
                'default' => 12,
                'type' => 'string',
            ],
            'width' => [
                'title' => 'Ширина',
                'default' => '100%',
                'description' => 'Может быть задана в px или %',
                'type' => 'string',
            ],
            'height' => [
                'title' => 'Высота',
                'default' => '350px',
                'description' => 'Может быть задана в px или %',
                'type' => 'string',
            ],
            'mapTypeId' => [
                'title'             => 'Map Type',
                'default'           => 'yandex#map',
                'type'              => 'dropdown',
                'options'           => ['yandex#map'=>'Roadmap', 'yandex#satellite'=>'Satellite', 'yandex#hybrid'=>'Hybrid']

            ],
            'hintContent' => [
                'title' => 'Хинт',
                'default' => 'Москва!',
                'description' => 'Подсказка на карте',
                'type' => 'string',
            ],
            'balloonContent' => [
                'title' => 'Балун',
                'default' => 'Столица России!',
                'description' => 'Всплывающее окно на карте',
                'type' => 'string',
            ]
        ];
    }
}
