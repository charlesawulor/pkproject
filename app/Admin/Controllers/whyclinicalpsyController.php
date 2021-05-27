<?php

namespace App\Admin\Controllers;

use App\whyclinicalpsy;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whyclinicalpsyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whyclinicalpsy';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whyclinicalpsy());

        $grid->column('id', __('Id'));
        $grid->column('why_clinicalpsy', __('Why clinicalpsy'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(whyclinicalpsy::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_clinicalpsy', __('Why clinicalpsy'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new whyclinicalpsy());

        $form->text('why_clinicalpsy', __('Why clinicalpsy'));

        return $form;
    }
}
