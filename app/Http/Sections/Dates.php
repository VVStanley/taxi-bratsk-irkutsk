<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Form\Buttons\Save;

/**
 * Class Dates
 *
 * @property \App\Models\Dates $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Dates extends Section implements Initializable
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
    protected $title = 'Выезд';

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-taxi')->setPriority(1);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $mDates = \App\Models\Dates::all()->first();

        if (empty($mDates)) {
            return $this->fireCreate();
        }

        return $this->fireEdit($mDates->id);
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
                    \AdminFormElement::select('city', 'Город отправления', $this->cities())
                ], 12)
                ->addColumn([
                    \AdminFormElement::select('places', 'Осталось мест', $this->places())
                ], 12)
                ->addColumn([
                    \AdminFormElement::date('date', 'Дата отпрвления'),
                ], 12)
                ->addColumn([
                    \AdminFormElement::time('time', 'Время отправления'),
                ], 12)
        );

        $form->getButtons()->replaceButtons([
            'delete' => null,
            'cancel' => null,
            'save'   => (new Save())->setText('Сохранить'),
        ]);

        return $form;
    }

    private function cities()
    {
        return [
            'Иркутск' => 'Иркутск',
            'Братск'  => 'Братск',
        ];
    }

    private function places()
    {
        return [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
        ];
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
