<?php

namespace App\Admin\Controllers;

use App\pgdeligibilityclinicalpsy;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class pgdeligibilityclinicalpsyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'pgdeligibilityclinicalpsy';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new pgdeligibilityclinicalpsy());

        $grid->column('id', __('Id'));
        $grid->column('eligibility', __('Eligibility'));
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
        $show = new Show(pgdeligibilityclinicalpsy::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('eligibility', __('Eligibility'));
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
        $form = new Form(new pgdeligibilityclinicalpsy());

        $form->text('eligibility', __('Eligibility'));

        return $form;
    }
}
