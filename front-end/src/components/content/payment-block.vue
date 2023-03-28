<template>
    <div>
        <div class="columns is-centered">
<!--            ====================-->
                <h4 class="title is-4 has-text-centered" v-if="paymentStatus === 1">Your Payment Has Been Completed!</h4>
<!--            ====================-->
            <div class="column is-8-desktop box payment-content p-0 pt-3" v-if="paymentStatus === 0">
                <h4 class="title is-4 has-text-centered">Payment Details</h4>
                <div class="level p-2">
                    <figure class="level-item image payment-method-icon">
                        <img src="../../assets/images/master-card.jpg">
                    </figure>
                    <figure class="level-item image payment-method-icon">
                        <img src="../../assets/images/american-express.jpg">
                    </figure>
                    <figure class="level-item image payment-method-icon">
                        <img src="../../assets/images/paypal.jpg">
                    </figure>
                    <figure class="level-item image payment-method-icon">
                        <img src="../../assets/images/discover-card.png">
                    </figure>
                </div>
                <div class="has-background-white p-3">
                    <label class="has-text-weight-semibold">CARD NUMBER</label>
                    <div class="control has-icons-right is-fullwidth">
                        <input class="input" type="text" placeholder="Visa Card Number">
                        <span class="icon is-small is-right right-icon">
                            <i class="fa fa-credit-card"></i>
                        </span>
                    </div>
                </div>
                <div class="columns has-background-white p-3 mb-0">
                    <div class="column is-8 p-0 pr-3">
                        <label class="has-text-weight-semibold">EXPIRATION DATE</label>
                        <div class="control has-icons-right ">
                            <input class="input" type="text" placeholder="MM/YY">
                        </div>
                    </div>
                    <div class="column is-4 p-0 ">
                        <label class="has-text-weight-semibold">CV CODE</label>
                        <div class="control has-icons-right">
                            <input class="input" type="text" placeholder="CVC">
                        </div>
                    </div>
                </div>
                <div class="has-background-white p-3">
                    <label class="has-text-weight-semibold">CARD OWNER</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Card Owner Name">
                    </div>
                </div>
                <div class="p-3">
                    <button class="button is-fullwidth is-success">Confirm Payment</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "payment-block",
    props:{
        paymentStatus:Number
    }
}
</script>

<style scoped>
    .payment-content{
        background: #f5f5f5;
    }
    .payment-method-icon > img{
        height: 67px;
        margin: 5px;
    }
    .right-icon{
        background: #dbdbdb;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px;
    }
    .right-icon > i{
        color: #363f48;
    }
</style>
