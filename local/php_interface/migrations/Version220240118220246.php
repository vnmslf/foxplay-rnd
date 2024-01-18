<?php

namespace Sprint\Migration;


class Version220240118220246 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.3.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'vse-pro-igry',
            'fox__info'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'История игр',
    'CODE' => 'istoriya-igr',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  1 => 
  array (
    'NAME' => 'Во что поиграем, Fox?',
    'CODE' => 'vo-chto-poigraem-fox',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  2 => 
  array (
    'NAME' => 'Турниры, рейтинги, системы подсчета очков',
    'CODE' => 'turniry-reytingi-sistemy-podscheta-ochkov',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
  3 => 
  array (
    'NAME' => 'Обо всем и ни о чем',
    'CODE' => 'obo-vsem-i-ni-o-chem',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
