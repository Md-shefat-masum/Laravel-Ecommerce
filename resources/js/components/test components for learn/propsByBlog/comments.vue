<template>
    <div>
        <div class="card mb-4">
            <div class="card-body">
                <comment-add></comment-add>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <ul>
                    <li class="d-flex flex-wrap align-content-center my-2" v-for="item in get_selected_comments" :key="item.id">
                        <img src="/avatar.png" style="height: 65px; padding: 10px;" alt="">
                        <div class="ml-4 py-2" style="flex: 1 ">
                            <h6>{{ item.name }}</h6>
                            <p>{{ item.description }}</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import CommentAdd from './commentAdd.vue'
import { mapGetters, mapActions } from 'vuex';
export default {
    // props: ['selected_comments','post_comment','blog_details'],
    components: {
        CommentAdd,
    },
    computed: {
        ...mapGetters([
            'get_selected_comments'
        ]),
    },
}
</script>

<style>

</style>
