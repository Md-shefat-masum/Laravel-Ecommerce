<template>
    <div class="card card-body printableArea mb-4">
        <h3><b>INVOICE</b> <span class="pull-right">#{{get_invoice_id}}</span></h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <address>
                        <h3><b class="text-danger">CIT Web Store</b></h3>
                        <p class="text-muted m-l-5">
                            Dhanmondi,
                            <br> Dhaka,
                            <br> Bangladesh
                            <br> 01620006811
                            <br> 01620006812
                        </p>
                    </address>
                </div>
                <div class="pull-right text-right">
                    <address>
                        <h3>To,</h3>
                        <h4 class="font-bold">{{get_billing_address.name}}</h4>
                        <p class="text-muted m-l-30">
                            {{get_billing_address.address}}, <br>
                            {{get_billing_address.address2}}, <br>
                            {{get_billing_address.town}}, <br>
                            {{get_billing_address.state}}, <br>
                            {{get_billing_address.phone}}, <br>
                        </p>
                        <p class="m-t-30">
                            <b>Invoice Date : </b>
                            <br>
                            <i class="fa fa-calendar"></i>
                            {{get_invoice_date}}
                        </p>
                    </address>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive m-t-40" style="clear: both;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Description</th>
                                <th class="text-right">Quantity</th>
                                <th class="text-right">Unit Cost</th>
                                <th class="text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(cart,index) in get_latest_saved_cart.order_products" :key="index">
                                <td class="text-center">{{ index+1 }}</td>
                                <td> {{ cart.product_name }} </td>
                                <td class="text-right"> {{ cart.qty }} </td>
                                <td class="text-right"> TK. {{ cart.price }}</td>
                                <td class="text-right"> TK. {{ parseInt(cart.qty) * cart.price }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <div class="pull-right m-t-30 text-right">
                    <p>Sub-Total amount: TK. {{ get_latest_saved_cart.subtotal }}</p>
                    <hr>
                    <h3><b>Total :</b> TK. {{ get_latest_saved_cart.total }}</h3>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="text-right">
                    <button id="print" class="btn btn-default btn-outline" type="button">
                        <span><i class="fa fa-print"></i> Print</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions, mapMutations } from 'vuex';
export default {

    created: function(){
        if(this.get_carts.length > 0){
            let checkout_information = {
                cart : this.get_carts,
                billing_address : this.get_billing_address,
                sub_total : this.get_sub_total,
            };
            this.save_checkout_information(checkout_information);
        }else{
            this.fetch_latest_saved_cart();
        }
    },
    methods: {
        ...mapActions([
            'save_checkout_information',
            'fetch_latest_saved_cart',
        ]),
        ...mapMutations([
            'reset_cart'
        ]),
    },
    computed: {
        ...mapGetters([
            'get_billing_address',
            'get_carts',
            'get_sub_total',
            'get_invoice_id',
            'get_invoice_date',
            'get_check_success',
            'get_latest_saved_cart',
        ]),
    }
}
</script>

<style>

</style>