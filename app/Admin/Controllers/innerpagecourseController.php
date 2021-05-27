<?php

namespace App\Admin\Controllers;

use App\innerpagecourse;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class innerpagecourseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'innerpagecourse';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new innerpagecourse());

        $grid->column('id', __('Id'));
        $grid->column('course_title', __('Course title'));
        $grid->column('about_course', __('About course'));
        $grid->column('course_image', __('Course image'));
        $grid->column('why_course', __('Why course'));
        $grid->column('course_deliverables', __('Course deliverables'));
        $grid->column('why_course_icri', __('Why course icri'));
        $grid->column('why_course_icri_image', __('Why course icri image'));
        $grid->column('msc_eligibility', __('Msc eligibility'));
        $grid->column('msc_curriculum', __('Msc curriculum'));
        $grid->column('msc_career_prospect', __('Msc career prospect'));

        $grid->column('msccourse_name', __('Msc campus name'));
        $grid->column('msc_campus_image', __('Msc campus image'));
        $grid->column('msccourse_name2', __('Msc campus name2'));
        $grid->column('msc_campus_image2', __('Msc campus image2'));
        $grid->column('msccourse_name3', __('Msc campus name3'));
        $grid->column('msc_campus_image3', __('Msc campus image3'));
        $grid->column('msccourse_name4', __('Msc campus name4'));
        $grid->column('msc_campus_image4', __('Msc campus image4'));

        $grid->column('bsc_eligibility', __('Bsc eligibility'));
        $grid->column('bsc_curriculum', __('Bsc curriculum'));
        $grid->column('bsc_careerprospect', __('Bsc careerprospect'));

        $grid->column('bsccourse_name', __('Bsc campus name'));
        $grid->column('bsc_campus_image', __('Bsc campus image'));
        $grid->column('bsccourse_name2', __('Bsc campus name2'));
        $grid->column('bsc_campus_image2', __('Bsc campus image2'));
        $grid->column('bsccourse_name3', __('Bsc campus name3'));
        $grid->column('bsc_campus_image3', __('Bsc campus image3'));
        $grid->column('bsccourse_name4', __('Bsc campus name4'));
        $grid->column('bsc_campus_image4', __('Bsc campus image4'));



        $grid->column('pgd_eligibility', __('Pgd eligibility'));
        $grid->column('pgd_curriculum', __('Pgd curriculum'));
        $grid->column('pgd_careerprospect', __('Pgd careerprospect'));
        $grid->column('pgd_campus_image', __('Pgd campus image'));
        $grid->column('phd_eligibility', __('Phd eligibility'));
        $grid->column('phd_curriculum', __('Phd curriculum'));
        $grid->column('phd_careerprospect', __('Phd careerprospect'));
        $grid->column('phd_campus_image', __('Phd campus image'));
        $grid->column('placement_image', __('Placement image'));
        $grid->column('placement_image2', __('Placement image2'));
        $grid->column('placement_image3', __('Placement image3'));
        $grid->column('placement_image4', __('Placement image4'));
        $grid->column('placement_image5', __('Placement image5'));
        $grid->column('placement_image6', __('Placement image6'));
        $grid->column('placement_image7', __('Placement image7'));
        $grid->column('placement_image8', __('Placement image8'));
        $grid->column('placement_image9', __('Placement image9'));
        $grid->column('placement_image10', __('Placement image10'));
        $grid->column('placement_image11', __('Placement image11'));
        $grid->column('placement_image12', __('Placement image12'));
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
        $show = new Show(innerpagecourse::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('course_title', __('Course title'));
        $show->field('about_course', __('About course'));
        $show->field('course_image', __('Course image'));
        $show->field('why_course', __('Why course'));
        $show->field('course_deliverables', __('Course deliverables'));
        $show->field('why_course_icri', __('Why course icri'));
        $show->field('why_course_icri_image', __('Why course icri image'));
        $show->field('msc_eligibility', __('Msc eligibility'));
        $show->field('msc_curriculum', __('Msc curriculum'));
        $show->field('msc_career_prospect', __('Msc career prospect'));

        $show->field('msccampus_name', __('Msc campus name'));      
        $show->field('msc_campus_image', __('Msc campus image'));
        $show->field('msccampus_name2', __('Msc campus name2'));
        $show->field('msc_campus_image2', __('Msc campus image2'));
        $show->field('msccampus_name3', __('Msc campus name3'));      
        $show->field('msc_campus_image3', __('Msc campus image3'));
        $show->field('msccampus_name4', __('Msc campus name4'));      
        $show->field('msc_campus_image4', __('Msc campus image4'));



        $show->field('bsc_eligibility', __('Bsc eligibility'));
        $show->field('bsc_curriculum', __('Bsc curriculum'));
        $show->field('bsc_careerprospect', __('Bsc careerprospect'));

        $show->field('bsccampus_name', __('Bsc campus name'));      
        $show->field('bsc_campus_image', __('Bsc campus image'));
        $show->field('bsccampus_name2', __('Bsc campus name2'));
        $show->field('bsc_campus_image2', __('Bsc campus image2'));
        $show->field('bsccampus_name3', __('Bsc campus name3'));      
        $show->field('bsc_campus_image3', __('Bsc campus image3'));
        $show->field('bsccampus_name4', __('Bsc campus name4'));      
        $show->field('bsc_campus_image4', __('Bsc campus image4'));



        $show->field('pgd_eligibility', __('Pgd eligibility'));
        $show->field('pgd_curriculum', __('Pgd curriculum'));
        $show->field('pgd_careerprospect', __('Pgd careerprospect'));
        $show->field('pgd_campus_image', __('Pgd campus image'));
        $show->field('phd_eligibility', __('Phd eligibility'));
        $show->field('phd_curriculum', __('Phd curriculum'));
        $show->field('phd_careerprospect', __('Phd careerprospect'));
        $show->field('phd_campus_image', __('Phd campus image'));
        $show->field('placement_image', __('Placement image'));
        $show->field('placement_image2', __('Placement image2'));
        $show->field('placement_image3', __('Placement image3'));
        $show->field('placement_image4', __('Placement image4'));
        $show->field('placement_image5', __('Placement image5'));
        $show->field('placement_image6', __('Placement image6'));
        $show->field('placement_image7', __('Placement image7'));
        $show->field('placement_image8', __('Placement image8'));
        $show->field('placement_image9', __('Placement image9'));
        $show->field('placement_image10', __('Placement image10'));
        $show->field('placement_image11', __('Placement image11'));
        $show->field('placement_image12', __('Placement image12'));
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
        $form = new Form(new innerpagecourse());

        $form->text('course_title', __('Course title'))->rules('nullable');
        $form->textarea('about_course', __('About course'))->rules('nullable');
        $form->image('course_image', __('Course image'))->rules('nullable');
        $form->textarea('why_course', __('Why course'))->rules('nullable');
        $form->textarea('course_deliverables', __('Course deliverables'))->rules('nullable');
        $form->textarea('why_course_icri', __('Why course icri'))->rules('nullable');
        $form->image('why_course_icri_image', __('Why course icri image'))->rules('nullable');
        $form->textarea('msc_eligibility', __('Msc eligibility'))->rules('nullable');
        $form->textarea('msc_curriculum', __('Msc curriculum'))->rules('nullable');
        $form->textarea('msc_career_prospect', __('Msc career prospect'))->rules('nullable');


        $form->text('msccampus_name', __('Msc campus name'))->rules('nullable');
        $form->image('msc_campus_image', __('Msc campus image'))->rules('nullable');
        $form->text('msccampus_name2', __('Msc campus name2'))->rules('nullable');
        $form->image('msc_campus_image2', __('Msc campus image2'))->rules('nullable');
        $form->text('msccampus_name3', __('Msc campus name3'))->rules('nullable');
        $form->image('msc_campus_image3', __('Msc campus image3'))->rules('nullable');
        $form->text('msccampus_name4', __('Msc campus name4'))->rules('nullable');
        $form->image('msc_campus_image4', __('Msc campus image4'))->rules('nullable');


        $form->textarea('bsc_eligibility', __('Bsc eligibility'))->rules('nullable');
        $form->textarea('bsc_curriculum', __('Bsc curriculum'))->rules('nullable');
        $form->textarea('bsc_careerprospect', __('Bsc career prospect'))->rules('nullable');

        $form->text('bsccampus_name', __('Bsc campus name'))->rules('nullable');
        $form->image('bsc_campus_image', __('Bsc campus image'))->rules('nullable');
        $form->text('bsccampus_name2', __('Bsc campus name2'))->rules('nullable');
        $form->image('bsc_campus_image2', __('Bsc campus image2'))->rules('nullable');
        $form->text('bsccampus_name3', __('Bsc campus name3'))->rules('nullable');
        $form->image('bsc_campus_image3', __('Bsc campus image3'))->rules('nullable');
        $form->text('bsccampus_name4', __('Bsc campus name4'))->rules('nullable');
        $form->image('bsc_campus_image4', __('Bsc campus image4'))->rules('nullable');


        $form->textarea('pgd_eligibility', __('Pgd eligibility'))->rules('nullable');
        $form->textarea('pgd_curriculum', __('Pgd curriculum'))->rules('nullable');
        $form->textarea('pgd_careerprospect', __('Pgd careerprospect'))->rules('nullable');
        $form->image('pgd_campus_image', __('Pgd campus image'))->rules('nullable');
        $form->textarea('phd_eligibility', __('Phd eligibility'))->rules('nullable');
        $form->textarea('phd_curriculum', __('Phd curriculum'))->rules('nullable');
        $form->textarea('phd_careerprospect', __('Phd careerprospect'))->rules('nullable');
        $form->image('phd_campus_image', __('Phd campus image'))->rules('nullable');
        $form->image('placement_image', __('Placement image'))->rules('nullable');
        $form->image('placement_image2', __('Placement image2'))->rules('nullable');
        $form->image('placement_image3', __('Placement image3'))->rules('nullable');
        $form->image('placement_image4', __('Placement image4'))->rules('nullable');
        $form->image('placement_image5', __('Placement image5'))->rules('nullable');
        $form->image('placement_image6', __('Placement image6'))->rules('nullable');
        $form->image('placement_image7', __('Placement image7'))->rules('nullable');
        $form->image('placement_image8', __('Placement image8'))->rules('nullable');
        $form->image('placement_image9', __('Placement image9'))->rules('nullable');
        $form->image('placement_image10', __('Placement image10'))->rules('nullable');
        $form->image('placement_image11', __('Placement image11'))->rules('nullable');
        $form->image('placement_image12', __('Placement image12'))->rules('nullable');

        return $form;
    }
}
