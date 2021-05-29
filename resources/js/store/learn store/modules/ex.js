import axios from 'axios';

// state list
const state = {
    selected_comments: [],
}

// get state
const getters = {
    get_blog_lists: state => state.blog_lists,
}

// actions
const actions = {
    // fetch_blog_details: function(state,blog){
    //     this.commit('set_blog_details',blog)
    // },
}

// mutators
const mutations = {
    // set_post_comment: function(state,comment){
    //     state.comments.unshift(comment);
    // },
}

export default {
    state,
    getters,
    actions,
    mutations
}
