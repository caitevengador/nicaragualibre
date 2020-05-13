<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\post\widgets;

use humhub\modules\content\widgets\WallCreateContentForm;
use humhub\modules\post\permissions\CreatePost;

/**
 * This widget is used include the post form.
 * It normally should be placed above a steam.
 *
 * @since 0.5
 */
class Form extends WallCreateContentForm
{

    /**
     * @inheritdoc
     */
    public $submitUrl = '/post/post/post';

    /**
     * @inheritdoc
     */
    public function renderForm()
    {
        return $this->render('form', []);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (!$this->contentContainer->permissionManager->can(new CreatePost())) {
            return;
        }

        return parent::run();
    }

}
