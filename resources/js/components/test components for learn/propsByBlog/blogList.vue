<template>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" v-for="item in get_blog_lists" :key="item.id">
                <div @click="fetch_blog_details(item)" style="cursor:pointer" class="card-body">
                    <h5>{{ item.title }}</h5>
                    <p>{{ item.description }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <blog-details></blog-details>
        </div>
    </div>
</template>

<script>
    import BlogDetails from './blogDetails.vue';
    import { mapGetters, mapActions } from 'vuex';

    export default {
        components: {
            BlogDetails,
        },
        data: function(){
            return {

                // blog_lists: [
                //     {
                //         id: 1,
                //         title: 'this is blog1',
                //         description: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, saepe praesentium in mollitia a tempore odi'
                //     },
                //     {
                //         id: 2,
                //         title: 'this is blog2',
                //         description: ' dolor sit amet consectetur, ading elit. Adipitia a tempore odi'
                //     },
                //     {
                //         id: 3,
                //         title: 'this is blog3',
                //         description: 'met consectetur, adipisicing elit. Adipisci, saepe praesenllitia a tempore odi'
                //     },
                //     {
                //         id: 4,
                //         title: 'this is blog4',
                //         description: 'ectetur, adipisicing elit. Adipisci, saepe ptium in mollitia a tempore odi'
                //     },
                //     {
                //         id: 5,
                //         title: 'this is blog5',
                //         description: 'Lorem ipsum dolor sit amet coipisci, saepe praesentium in mompore odi'
                //     },
                // ],

                // blog_details:{
                //     title: '',
                //     description: '',
                // },
                // comments: [
                //     {
                //         id: 1,
                //         blog_id: 1,
                //         name: 'abul kasem',
                //         description: 'blog 1 comment ipsum dolor sit amet consectetur'
                //     },
                //     {
                //         id: 2,
                //         blog_id: 2,
                //         name: 'abul hasem',
                //         description: 'blog 2 comment Lorem ipsum dolor sit amet consectetur'
                //     },
                //     {
                //         id: 3,
                //         blog_id: 3,
                //         name: 'abul hasnat',
                //         description: 'blog3 comment Lorem ipsum dolor sit amet consectetur'
                //     },
                //     {
                //         id: 4,
                //         blog_id: 3,
                //         name: 'samim',
                //         description: ' blog3 it amet consectetur'
                //     },
                //     {
                //         id: 5,
                //         blog_id: 3,
                //         name: 'tarek',
                //         description: 'blog3 et consectetur'
                //     },
                // ],
                // selected_comments: [],
            }
        },
        methods: {
            ...mapActions([
                'fetch_blog_details'
            ]),
            // get_blog_details: function(blog){
            //     this.blog_details = blog;
            //     this.get_comments(blog.id);
            // },
            // get_comments: function(blog_id){
            //     this.selected_comments = this.comments.filter((item)=>item.blog_id === blog_id);
            // },
            // post_comment: function(comment){
            //     comment.id = this.comments.length + 1;
            //     this.comments.unshift(comment);
            //     this.get_comments(comment.blog_id);
            // }
        },
        computed: {
            ...mapGetters([
                'get_blog_lists'
            ]),
        }

    };
</script>

<style>
</style>
