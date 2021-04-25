<template>
    <div>
        <div class="card mb-4">
            <div class="card-body">
                <h5>{{ get_blog_details.title }}</h5>
                <p>{{ get_blog_details.description }}</p>
            </div>
        </div>
        <comments></comments>
    </div>
</template>

<script>
import Comments from './comments.vue'
import { mapGetters, mapActions } from 'vuex';

export default {
    // props: ['blog_details','selected_comments','post_comment'],
    components:{
        Comments,
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
