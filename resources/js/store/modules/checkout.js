import axios from 'axios';

// state list
const state = {
    billing_address: {
        name: '',
        email: '',
        address: '',
        address2: '',
        town: '',
        state: '',
        phone: '',
        order_notes:'',
    },
    invoice_date: '',
    invoice_id: '',
    check_success: false,
}

// get state
const getters = {
    get_billing_address: state => state.billing_address,
    get_invoice_date: state => state.invoice_date,
    get_invoice_id: state => state.invoice_id,
    get_check_success: state => state.check_success,
}

// actions
const actions = {
    save_checkout_information: function(state,checkout_information){
        axios.post('/save_checkout_information',checkout_information)
            .then((res)=>{
                this.commit('set_invoice_id_and_date',{
                    invoice_id : res.data.invoice_id,
                    invoice_date : res.data.invoice_date,
                });
            })
    },
}

// mutators
const mutations = {
    set_billing_address: function(state, billing_address){
        state.billing_address = billing_address;
    },
    set_invoice_id_and_date: function(state, info){
        state.invoice_id = info.invoice_id;
        state.invoice_date = info.invoice_date;
        state.check_success = true;
        this.commit('reset_cart', null, { root: true });
        this.dispatch('fetch_latest_saved_cart', null, { root: true });
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
