import axios from 'axios';

// state list
const state = {
    product_list: [],
    product_details: {},
    test_variable: 'this is test',
}

// get state
const getters = {
    get_product_list: state => state.product_list,
    get_product_details: state => state.product_details,
    get_test_variable: state => state.test_variable,
}

// actions
const actions = {
    fetch_product_list: function(state){
        axios.get('/json/latest-products-json')
            .then((res)=>{
                this.commit('set_product_list',res.data);
            })
    },
}

// mutators
const mutations = {
    set_product_list: function(state,product_list){
        state.product_list = product_list;
    },
    set_product_details: function(state,product_details){
        state.product_details = product_details;
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}
