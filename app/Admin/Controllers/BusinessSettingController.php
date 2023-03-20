<?php

namespace App\Admin\Controllers;

use App\Models\BusinessSetting;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BusinessSettingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BusinessSetting';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BusinessSetting());

        $grid->column('id', __('Id'));
        $grid->column('key', __('Key'));
        $grid->column('value', __('Value'));
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
        $show = new Show(BusinessSetting::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('key', __('Key'));
        $show->field('value', __('Value'));
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
        $form = new Form(new BusinessSetting());

        $form->text('key', __('Key'));
        /*
        create custom fields for value. Value is json format. 
        we combine client id and secret id for value and convert it to json
        */
        $form->embeds('value', function($form){
           $form->number('status', __('Status'))->default(1)->max(1)->min(0);
           $form->text('paypal_client_id', __('Client ID')) ;
           $form->text('paypal_secret_id', __('Secret ID'));
        });
        return $form;
    }
}
