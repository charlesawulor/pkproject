<?php

namespace App\Admin\Controllers;

use App\whymktautomgt;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whymktautomgtController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whymktautomgt';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whymktautomgt());

        $grid->column('id', __('Id'));
        $grid->column('why_auto', __('Why auto'));
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
        $show = new Show(whymktautomgt::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_auto', __('Why auto'));
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
        $form = new Form(new whymktautomgt());

        $form->text('why_auto', __('Why auto'));

        return $form;
    }
}
