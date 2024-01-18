<?php

namespace Sprint\Migration;


class INFO220240118194942 extends Version
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
)        );
    }

    public function down()
    {
        //your code ...
    }
}
