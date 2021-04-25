<template>
    <div v-if="get_blog_details && get_blog_details.id">
        <div class="form-group">
            <label for="">Name</label>
            <input v-model="comment_body.name" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="">Comment</label>
            <textarea v-model="comment_body.description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button @click="comment_submit" class="btn btn-sm btn-success">submit</button>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
export default {
    // props: ['blog_details','post_comment'],
    data: function(){
        return {
            comment_body: {
                blog_id: '',
                name: '',
                description: ''
            },
        }
    },
    methods: {
        ...mapActions([
            'post_blog_comment'
        ]),
        comment_submit: function(){
            // this.comment_body.blog_id = this.blog_details.id;
            this.post_blog_comment(this.comment_body);

            this.comment_body = {
                blog_id: '',
                name: '',
                description: ''
            };
        }
    },
    computed: {
        ...mapGetters([
            'get_blog_details'
        ]),
    },
}
</script>

<style>

</style>
