<?php

namespace App\Http\Sections;

use App\Models\Seos;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Form\Buttons\Save;

/**
 * Class Seo
 *
 * @property \App\Models\Seos $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Seo extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'СЕО теги';

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-tags');
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $mSeos = Seos::all()->first();

        if (empty($mSeos)) {
            return $this->fireCreate();
        }

        return $this->fireEdit($mSeos->id);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $form = \AdminForm::form()->addElement(
            \AdminFormElement::columns()
                ->addColumn([
                    \AdminFormElement::text('title', 'Заголовок браузера (title)')->required()
                ], 12)
                ->addColumn([
                    \AdminFormElement::text('description', 'Описание сайта (description)')->required()
                ], 12)
                ->addColumn([
                    \AdminFormElement::text('keywords', 'Ключевые слова (keywords)')
                ], 12)
                ->addColumn([
                    \AdminFormElement::text('h1', 'Заголовок H1')->required()
                ], 6)
                ->addColumn([
                    \AdminFormElement::text('route_title', 'Заголовок секции маршруты')->required()
                ], 6)
                ->addColumn([
                    \AdminFormElement::text('advantages_title', 'Заголовок секции преимущества')->required()
                ], 6)
                ->addColumn([
                    \AdminFormElement::text('gallery_title', 'Заголовок секции галерея')->required()
                ], 6)
        );

        $form->getButtons()->replaceButtons([
            'delete' => null,
            'cancel' => null,
            'save'   => (new Save())->setText('Сохранить'),
        ]);

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
