<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) BoonEx Pty Limited - http://www.boonex.com/
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 *
 * @defgroup    BaseGeneral Base classes for modules
 * @ingroup     DolphinModules
 * 
 * @{
 */

bx_import('BxBaseModProfileGridAdministration');

class BxBaseModProfileGridModeration extends BxBaseModProfileGridAdministration
{
    public function __construct ($aOptions, $oTemplate = false)
    {
        parent::__construct ($aOptions, $oTemplate);

        $this->_sManageType = 'moderation';
    }

	public function performActionDelete()
    {
        $this->_echoResultJson(array());
    }
}

/** @} */