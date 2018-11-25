<?php

namespace App\Http\Sections;

use App\Models\Option;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Section;

/**
 * Class Options
 *
 * @property \App\Models\Option $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Options extends Section implements Initializable
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
    protected $title = 'Основное';

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-bars');
    }


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $mOption = Option::all()->first();

        if (empty($mOption)) {
            return $this->fireCreate();
        }

        return $this->fireEdit($mOption->id);
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
                    \AdminFormElement::text('phone', 'Телефон'),
                ], 12)
                ->addColumn([
                    \AdminFormElement::text('price_one', 'Стоимость одного места'),
                ], 12)
                ->addColumn([
                    \AdminFormElement::text('price_all', 'Стоимость машины')
                ], 12)
                ->addColumn([
                    \AdminFormElement::text('email', 'Почта обратной связи')
                ], 12)
                ->addColumn([
                    \AdminFormElement::textarea('text', 'Немного о нас')
                ], 12)
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
