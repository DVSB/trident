<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) BoonEx Pty Limited - http://www.boonex.com/
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 *
 * @defgroup    DolphinCore Dolphin Core
 * @{
 */

bx_import ('BxBaseUploaderHTML5');

/**
 * @see BxDolUploader
 */
class BxTemplUploaderHTML5 extends BxBaseUploaderHTML5
{
    function __construct($aObject, $sStorageObject, $sUniqId)
    {
        parent::__construct($aObject, $sStorageObject, $sUniqId);
    }
}

/** @} */