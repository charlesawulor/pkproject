<?php

namespace App\Admin\Controllers;

use App\deliverableslogisticsmanagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class deliverableslogisticsmanagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'deliverableslogisticsmanagement';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new deliverableslogisticsmanagement());

        $grid->column('id', __('Id'));
        $grid->column('deliverables', __('Deliverables'));
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
        $show = new Show(deliverableslogisticsmanagement::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('deliverables', __('Deliverables'));
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
        $form = new Form(new deliverableslogisticsmanagement());

        $form->text('deliverables', __('Deliverables'));

        return $form;
    }
}
