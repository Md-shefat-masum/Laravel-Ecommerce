import axios from 'axios';

// state list
const state = {
    sub_total: 0,
    carts: [],
}

// get state
const getters = {
    get_carts: state => state.carts,
    get_sub_total: state => state.sub_total,
}

// actions
const actions = {
}

// mutators
const mutations = {
    set_carts: function(state,cart){
        let temp_cart = state.carts.filter((item)=>item.product.id != cart.product.id);
        state.carts = temp_cart;
        state.carts.push(cart);
        this.commit('calculate_cart_total');
    },
    remove_from_carts: function(state,cart){
        let temp_cart = state.carts.filter((item)=>item.product.id != cart.product.id);
        state.carts = temp_cart;
        this.commit('calculate_cart_total');
    },
    change_cart_qty: function(state,product_info){
        let product = state.carts.find((item) => {
            return item.product.id  === product_info.product_id;
        });
        product.qty = product_info.qty;
        this.commit('calculate_cart_total');
    },
    calculate_cart_total: function(state,cart){
        state.sub_total = state.carts.reduce((total,item)=>total += (item.product_price * item.qty),0);
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
