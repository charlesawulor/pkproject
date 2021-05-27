<?php

namespace App\Admin\Controllers;

use App\whyicriclinicalpsy;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whyicriclinicalpsyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whyicriclinicalpsy';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whyicriclinicalpsy());

        $grid->column('id', __('Id'));
        $grid->column('why_icri_clinicalpsy', __('Why icri clinicalpsy'));
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
        $show = new Show(whyicriclinicalpsy::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_icri_clinicalpsy', __('Why icri clinicalpsy'));
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
        $form = new Form(new whyicriclinicalpsy());

        $form->text('why_icri_clinicalpsy', __('Why icri clinicalpsy'));

        return $form;
    }
}
