$(function(){

    // remover action on navbar dropdown menu
    $('.has-arrow').on('click',(e)=>e.preventDefault());

    // rerender delete function on ajax load html
    const init_delete_function = () => {
        $('.delete_btn').off().on('click',function(e){
            e.preventDefault();
            if(confirm('sure want to delete')){
                $.ajax({
                    url:$(this).attr('href'),
                    type:'delete',
                    success:(res)=>{
                        $(this).parents($(this).data('parent')).remove();
                        $(this).parents('tr').remove();
                        $(this).parents('li').remove();
                        Toast.fire({
                            icon: 'success',
                            title: 'data deleted'
                        })
                    }
                })
            }
        });
    }

    init_delete_function();

    // remove alert on foucus input fields
    $('input').on('focus',function(e){
        $(this).siblings('span').html('');
    });

    $('select').on('focus',function(e){
        $(this).siblings('span').html('');
    });

    $('textarea').on('focus',function(e){
        $(this).siblings('span').html('');
    });

    // all insert form ajax
    $('.insert_form').on('submit',function(e){
        e.preventDefault();
        let formData = new FormData($(this)[0]);
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: (res)=>{
                console.log(res);
                $(this).trigger('reset');
                $('.product_insert_form select').val('').trigger('change')
                $('.note-editable').html('');
                $('.preloader').hide();
                toaster('success','data inserted successfully.');
            },
            error: (err)=>{
                // console.log(err.responseJSON.errors);
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $(`.${key}`).text(element);
                    }
                }
                toaster('error','check below for errors');
                $('.preloader').hide();
            },
            beforeSend:()=>{
                $('.preloader').show();
            }
        })
    });

    // all update form ajax
    $('.update_form').on('submit',function(e){
        e.preventDefault();
        let formData = new FormData($(this)[0]);
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: (res)=>{
                $('.preloader').hide();
                toaster('success','data updated successfully.');
            },
            error: (err)=>{
                // console.log(err.responseJSON.errors);
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $(`.${key}`).text(element);
                    }
                }
                toaster('error','check below for errors');
                $('.preloader').hide();
            },
            beforeSend:()=>{
                $('.preloader').show();
            }
        })
    });

    // component form ajax
    $('.component_form_submit').off().on('click',function(){
        let form = $(this).parents('.component_form');
        let target_select = $(this).parents('.component_form').data('target_select');
        let action = $(this).parents('.component_form').attr('action');
        let inputs = $(form[0]).children('.modal-body').children('.form-group').children('div').children('input');
        let textareas = $(form[0]).children('.modal-body').children('.form-group').children('div').children('textarea');
        let selects = $(form[0]).children('.modal-body').children('.form-group').children('div').children('.select_ontime').children('select');

        // let formData = new FormData(form);
        let temp_form = $(document.createElement('form'));
        $(temp_form).attr('method','POST');

        for (const key in inputs) {
            if (Object.hasOwnProperty.call(inputs, key)) {
                const element = inputs[key];
                if( parseInt(key) >= 0 && typeof parseInt(key) === "number"){
                    $(temp_form).append($(element).clone());
                }
            }
        }

        for (const key in textareas) {
            if (Object.hasOwnProperty.call(textareas, key)) {
                const element = textareas[key];
                if( parseInt(key) >= 0 && typeof parseInt(key) === "number"){
                    $(temp_form).append($(element).clone());
                }
            }
        }

        for (const key in selects) {
            if (Object.hasOwnProperty.call(selects, key)) {
                const element = selects[key];
                if( parseInt(key) >= 0 && typeof parseInt(key) === "number"){
                    $(temp_form).append($(element).clone());
                }
            }
        }

        let formData = new FormData(temp_form[0]);

        $.ajax({
            url : action,
            type : "POST",
            data : formData,
            success : (res)=>{
                // console.log(res.html,action);
                $('.component_preloader').hide();
                toaster('success','data inserted successfully.');
                $('.modal').modal('hide');
                $('.component_form input').val('');
                $('.component_form textarea').val('');
                $('.component_form select').html('');
                $(target_select).prepend(res.html);
                $(target_select).val(res.value);
            },
            error: (err)=>{
                // console.log(err.responseJSON.errors);
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $(`.component_form .${key}`).text(element);
                    }
                }
                toaster('error','check below for errors');
                $('.component_preloader').hide();
            },
            beforeSend:()=>{
                $('.component_preloader').show();
            }
        })

        // console.log(form, action, inputs, textareas, temp_form);
    });

    // if another select option change on one select
    $('.parent_select').off().on('change',function(){
        let value = $(this).val();
        let control_url = $(this).data('this_field_control_route');
        let control_class = $(this).data('this_field_will_contorl');

        $.get(control_url+'/'+value,(res)=>{
            $('.'+control_class).html(res);
        })
    })

    // load option form modal component select
    $('.load_options').on('click',function(e){
        e.preventDefault();
        let url = $(this).data('url');
        let control_class = $(this).siblings('select').data('this_field_will_contorl');
        $.get(url,(res)=>{
            $(this).siblings('select').html(res);
            if(control_class){
                $('.'+control_class).html('');
            }
        });
    });

    // file manager ajax

    const get_all_image = () =>{
        $.get('/file-manager/get-files',(res)=>{
            $('.file_manager_image_list').html(res);
            init_delete_function();
            activate_image_function();
        });
    }

    // modal trigger
    let selected_file_input = '';
    $('.input_file_body').on('click',function(){
        get_all_image();
        selected_file_input = $(this).children('input')[0];
    })

    $('.fm_file_importer').on('change',function(){
        let temp_form = $(document.createElement('form'));
        $(temp_form).attr('method','POST');
        $(temp_form).append($(this).clone());
        let formData = new FormData(temp_form[0]);

        $.post('/file-manager/store-file',formData,(res)=>{
            if(res){
                $(this).val('');
                get_all_image();
                toaster('success','Image Uploaded Successfully');
            }
        })

    })

    let selected_image = [];
    let selected_image_id = [];
    const activate_image_function = () => {
        selected_image = [];
        $('.fm_checkbox').on('click',function(){
            let value = $(this).data('name');
            let value_Id = $(this).val();
            let check_exist = selected_image.includes(value);
            if(check_exist){
                selected_image = selected_image.filter(name=>name != value);
                selected_image_id = selected_image_id.filter(id=>id != value_Id);
            }else{
                selected_image.push(value);
                selected_image_id.push(value_Id);
            }
            // console.log(value,selected_image);
        })
    }

    $('#fm_confirm_btn').on('click',function(e){
        e.preventDefault();

        if(selected_image.length){
            if($(selected_file_input)[0].multiple === false){
                $(selected_file_input).val(selected_image[0]);
                $(selected_file_input).siblings('img').attr('src','/'+selected_image[0]);
            }else{
                // $(selected_file_input).val(JSON.stringify(selected_image));
                $(selected_file_input).val(JSON.stringify(selected_image_id));
                $(selected_file_input).siblings('img').remove();
                for (let index = 0; index < selected_image.length; index++) {
                    const element = selected_image[index];
                    $(selected_file_input).parents('.input_file_body').prepend('<img src="/'+element+'" style="height: 50px;margin: 5px;" alt="product image"/>')
                }
            }
            $('#fileManagerModal').modal('hide');
        }else{
            toaster('error','no file selected');
        }
    });

    // product main category ajax
    $('.product_main_category').on('change',function(){
        let value = $(this).val();
        $.get('/admin/product/get-all-cateogory-selected-by-main-category/'+value,(res)=>{
            $('.product_category').html(res);
            $('.product_sub_category').html('');
        });
    })

    // product category ajax
    $('.product_category').on('change',function(){
        let value = $(this).val();
        $.get('/admin/product/get-all-sub-cateogory-selected-by-category/'+value,(res)=>{
            $('.product_sub_category').html(res);
        });
    })


})
