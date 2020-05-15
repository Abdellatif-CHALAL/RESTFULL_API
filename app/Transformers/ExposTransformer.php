<?php

namespace App\Transformers;

use App\Expos;
use League\Fractal\TransformerAbstract;

class ExposTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Expos $expos)
    {
        return [
            'identifier' => (int)$expos->id,
            'codeExpos' => (string)$expos->expo_code,
            'date' => (string)$expos->date,
            'category' => (string)$expos->chategory,
            'nomItemAnglais' => (string)$expos->item_name_en,
            'nomItemFrancais' => (string)$expos->item_name_fr,
            'titreExposAnglais' => (string)$expos->expo_title_en,
            'titreExposFrancais' => (string)$expos->expo_title_fr,
            'themeAnglais' => (string)$expos->theme_en,
            'themeFrancais' => (string)$expos->theme_fr,
            'villeAnglais' => (string)$expos->city_en,
            'villeFrancais' => (string)$expos->city_fr,
            'nomEcAnglais' => (string)$expos->ec_name_en,
            'nomEcFrancais' => (string)$expos->ec_name_fr,
            'colorCode' => (string)$expos->color_code,
            'styleCss' => (string)$expos->css_style,
            'nomCAnglais' => (string)$expos->c_name_en,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('expos.show', $expos->id),
                ],
        
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identifier' => 'id',
            'codeExpos' => 'expo_code',
            'date' => 'date',
            'category' => 'chategory',
            'nomItemAnglais' => 'item_name_en',
            'nomItemFrancais' => 'item_name_fr',
            'titreExposAnglais' => 'expo_title_en',
            'titreExposFrancais' => 'expo_title_fr',
            'themeAnglais' => 'theme_en',
            'themeFrancais' => 'theme_fr',
            'villeAnglais' => 'city_en',
            'villeFrancais' => 'city_fr',
            'nomEcAnglais' => 'ec_name_en',
            'nomEcFrancais' => 'ec_name_fr',
            'colorCode' => 'color_code',
            'styleCss' => 'css_style',
            'nomCAnglais' => 'c_name_en',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'identifier' => 'id',
            'codeExpos' => 'expo_code',
            'date' => 'date',
            'category' => 'chategory',
            'nomItemAnglais' => 'item_name_en',
            'nomItemFrancais' => 'item_name_fr',
            'titreExposAnglais' => 'expo_title_en',
            'titreExposFrancais' => 'expo_title_fr',
            'themeAnglais' => 'theme_en',
            'themeFrancais' => 'theme_fr',
            'villeAnglais' => 'city_en',
            'villeFrancais' => 'city_fr',
            'nomEcAnglais' => 'ec_name_en',
            'nomEcFrancais' => 'ec_name_fr',
            'colorCode' => 'color_code',
            'styleCss' => 'css_style',
            'nomCAnglais' => 'c_name_en',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}