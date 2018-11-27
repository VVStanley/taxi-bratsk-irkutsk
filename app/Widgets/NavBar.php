<?php

namespace App\Widgets;


use SleepingOwl\Admin\Widgets\Widget;

class NavBar extends Widget
{
    /**
     * Путь до шаблона, в который добавляем
     * @return string|array
     */
    public function template()
    {
        return \AdminTemplate::getViewPath('_partials.header');
    }

    /**
     * HTML который необходимо поместить
     * @return string
     * @throws \Throwable
     */
    public function toHtml()
    {
        return view('admin.widgets.navbar')->render();
    }

    /**
     * Блок в шаблоне, куда помещаем
     * @return string
     */
    public function block()
    {
        return 'navbar.right';
    }
}
