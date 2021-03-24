$(function(){

    const init_delete = () => {
        $('.delete_btn').off().on('click',function(e){
            e.preventDefault();
            if(confirm('sure want to delete')){
                $.ajax({
                    url:$(this).attr('href'),
                    type:'delete',
                    success:(res)=>{
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

    init_delete();

    $('input').off().on('focus',function(e){
        $(this).siblings('span').html('');
    });

    $('select').off().on('focus',function(e){
        $(this).off().siblings('span').html('');
    });

    $('textarea').off().on('focus',function(e){
        $(this).siblings('span').html('');
    });

    $('.insert_form').off().on('submit',function(e){
        e.preventDefault();
        let formData = new FormData($(this)[0]);
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: (res)=>{
                console.log(res);
                $(this).trigger('reset');
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

    $('.update_form').off().on('submit',function(e){
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
                // console.log(target_select);
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

    $('.parent_select').off().on('change',function(){
        let value = $(this).val();
        let control_url = $(this).data('this_field_control_route');
        let control_class = $(this).data('this_field_will_contorl');

        $.get(control_url+'/'+value,(res)=>{
            $('.'+control_class).html(res);
        })
    })

    $('.load_options').off().on('click',function(e){
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

    const get_fm_images = () =>{
        $.get('/file-manager/get-files',(res)=>{
            $('.file_manager_images_list').html(res);
            activate_image_functions();
            init_delete();
        });
    }

    $('.fm_file_importer').on('change',function(){
        let temp_form = $(document.createElement('form'));
        $(temp_form).attr('method','POST');
        $(temp_form).append($(this).clone());
        let formData = new FormData(temp_form[0]);

        $.post('/file-manager/store-file',formData,(res)=>{
            if(res){
                $(this).val('');
                get_fm_images();
                toaster('success','Image Uploaded successfully.');
            }
        })
    })

    let clicked_input_field = '';

    $('.input_file_body').on('click',function(){
        get_fm_images();
        clicked_input_field = $(this).children('input');
    })

    let selected_image = [];

    const activate_image_functions = () => {
        selected_image = [];
        $('.fm_checkbox').off().on('click',function(){
            let value = $(this).data('name');
            let check_exists = selected_image.includes(value);
            if(!check_exists){
                selected_image.push(value);
            }else{
                selected_image = selected_image.filter(name => name !== value);
            }
            // console.log(selected_image,check_exists);
        });
    }

    $('.fm_confirm_btn').off().on('click',function(e){
        e.preventDefault();
        if(selected_image.length){
            if(clicked_input_field[0].multiple === false){
                clicked_input_field[0].value = selected_image[0];
                $(clicked_input_field[0]).siblings('img').attr('src','/'+selected_image[0]);
            }else{
                $(clicked_input_field[0]).siblings('img').remove();
                for (let index = 0; index < selected_image.length; index++) {
                    const element = selected_image[index];
                    $(clicked_input_field[0]).parents('.input_file_body').prepend('<img style="height: 50px;margin: 5px;" src="/'+element+'"/>');
                }
                clicked_input_field[0].value = JSON.stringify(selected_image);
            }
            $('#fileManagerModal').modal('hide');
            console.log(clicked_input_field);
        }else{
            toaster('error','no item selected');
        }
        console.log(selected_image);
    });



})
