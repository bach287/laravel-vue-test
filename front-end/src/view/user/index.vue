<template>
    <div class="container">
        <div class="section">
            <h5 class="title is-5" >My Account</h5>
        </div>
        <div class="pb-6">
            <div class="columns content-container box p-2  is-multiline">
                <div class="column is-4">
                    <div class="has-text-centered has-background-grey-lighter p-4 rounded-border content-item" id="content_1">
                        <a class="item-link" @click="changeContent(1, $event)">
                            <div>
                                <span class="icon is-medium">
                                <i class="fa fa-user-circle"></i>
                                </span>
                                <p class="has-text-weight-semibold">アカウント情報</p>
                            </div>
                        </a>
                    </div>
                    <div class="has-text-centered has-background-grey-lighter p-4 rounded-border content-item" id="content_2">
                        <a class="item-link" @click="changeContent(2, $event)">
                            <div>
                                <span class="icon is-medium">
                                    <i class="fa fa-signal"></i>
                                </span>
                                <p class="has-text-weight-semibold">2KYLサービス利用状況</p>
                            </div>
                        </a>
                    </div>
                    <div class="has-text-centered has-background-grey-lighter p-4 rounded-border content-item" id="content_3">
                        <a class="item-link" @click="changeContent(3, $event)">
                            <div>
                                <span class="icon is-medium">
                                <i class="fa fa-credit-card"></i>
                                </span>
                                <p class="has-text-weight-semibold">支払いカード情報</p>
                            </div>
                        </a>
                    </div>
                    <div class="has-text-centered has-background-grey-lighter p-4 rounded-border content-item" id="content_4">
                        <a class="item-link" @click="changeContent(4, $event)">
                            <div>
                                <span class="icon is-medium">
                                <i class="fa fa-key"></i>
                                </span>
                                <p class="has-text-weight-semibold">入金トークンアドレス</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="column is-8 p-6">
                    <change-info-block
                        v-show="currentContent === 1"
                        :userData="userData"
                        @submit="submitData"
                    />
                    <payment-block
                        v-show="currentContent === 3"
                        :paymentStatus="userData['payment_status']"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import changeInfoBlock from "../../components/content/change-info-block.vue";
import paymentBlock from "../../components/content/payment-block.vue";
import axios from 'axios';
export default {
    components: {
        ChangeInfoBlock: changeInfoBlock,
        PaymentBlock: paymentBlock
    },
    data(){
        return {
            currentContent: 1,
            userData: []
        }
    },
    created() {
        this.fetchData();
    },
    methods:{
        initContent(){
            document.getElementById("content_"+this.currentContent).classList.add("is-selected")
        },
        changeContent(index, event){
            document.getElementById("content_"+this.currentContent).classList.remove("is-selected")
            this.currentContent = index;
            document.getElementById("content_"+index).classList.add("is-selected")
        },
        async fetchData(){
            const userId = this.$route.query.id
            axios.get('http://127.0.0.1:8000/user/' + userId)
            .then(response => {
                this.userData = response.data
            })
            .catch(error =>{
                console.log('Cannot get user\'s data');
            })
        },
        submitData(inputData){
            debugger
            const formData = new FormData();
            formData.append('user_code', inputData['user_code'])
            formData.append('user_id', inputData['user_id'])
            formData.append('gender', inputData['gender'])
            formData.append('country', inputData['country'])
            formData.append('image', inputData['image'])
            formData.append('name', inputData['name'])
            axios.post('http://127.0.0.1:8000/user/edit', formData)
            .then(response =>{
            })
            .catch(error => {
                console.log(error.message)
            });
        }
    },
    mounted() {
        this.initContent();
    }
}
</script>
<style>
    .content-item{
        margin-bottom: 15px;
    }
    .content-item:hover > a{
        color: white;
    }
    .item-link:active{
        color: white;
    }
    .item-link{
        color: #363f48;
    }
    .is-selected{
        background: #f6b832 !important;
    }
    .is-selected a{
        color: white;
    }
    .columns{
        margin: 0;
    }
</style>

