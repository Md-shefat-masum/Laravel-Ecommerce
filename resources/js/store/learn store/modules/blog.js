import axios from 'axios';

// state list
const state = {
    blog_lists: [
        {
            id: 1,
            title: 'this is blog1',
            description: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, saepe praesentium in mollitia a tempore odi'
        },
        {
            id: 2,
            title: 'this is blog2',
            description: ' dolor sit amet consectetur, ading elit. Adipitia a tempore odi'
        },
        {
            id: 3,
            title: 'this is blog3',
            description: 'met consectetur, adipisicing elit. Adipisci, saepe praesenllitia a tempore odi'
        },
        {
            id: 4,
            title: 'this is blog4',
            description: 'ectetur, adipisicing elit. Adipisci, saepe ptium in mollitia a tempore odi'
        },
        {
            id: 5,
            title: 'this is blog5',
            description: 'Lorem ipsum dolor sit amet coipisci, saepe praesentium in mompore odi'
        },
    ],
    blog_details:{
        id: '',
        title: '',
        description: '',
    },
    comments: [
        {
            id: 1,
            blog_id: 1,
            name: 'abul kasem',
            description: 'blog 1 comment ipsum dolor sit amet consectetur'
        },
        {
            id: 2,
            blog_id: 2,
            name: 'abul hasem',
            description: 'blog 2 comment Lorem ipsum dolor sit amet consectetur'
        },
        {
            id: 3,
            blog_id: 3,
            name: 'abul hasnat',
            description: 'blog3 comment Lorem ipsum dolor sit amet consectetur'
        },
        {
            id: 4,
            blog_id: 3,
            name: 'samim',
            description: ' blog3 it amet consectetur'
        },
        {
            id: 5,
            blog_id: 3,
            name: 'tarek',
            description: 'blog3 et consectetur'
        },
    ],
    selected_comments: [],
}

// get state
const getters = {
    get_blog_lists: state => state.blog_lists,
    get_blog_details: state => state.blog_details,
    get_comments: state => state.comments,
    get_selected_comments: state => state.selected_comments,
}

// actions
const actions = {
    fetch_blog_details: function(state,blog){
        this.commit('set_blog_details',blog)
        this.commit('set_comments',blog.id)
    },
    post_blog_comment: function(state,comment){
        comment.blog_id = this.state.blog.blog_details.id;
        this.commit('set_post_comment',comment)
        this.commit('set_comments',comment.blog_id)
    }
}

// mutators
const mutations = {
    set_post_comment: function(state,comment){
        comment.id = state.comments.length + 1;
        state.comments.unshift(comment);
    },
    set_blog_details: function(state,blog){
        state.blog_details = blog;
    },
    set_comments: function(state,blog_id){
        state.selected_comments = state.comments.filter((item)=>item.blog_id === blog_id);
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}
