<template>
    <div class="container">
        <div class="section">
            <h5 class="title is-5" >My Account</h5>
        </div>
        <div class="has-background-white">
            <div class="columns content-container box p-2">
                <div class="column is-4">
                    <div class="has-text-centered has-background-grey-lighter rounded-border content-item">
                        <a class="item-link m-4" href="">
                            <div>
                                <span class="icon is-medium">
                                <i class="fa fa-user-circle"></i>
                                </span>
                                <p class="has-text-weight-semibold">アカウント情報</p>
                            </div>
                        </a>
                    </div>
                    <div class="has-text-centered has-background-grey-lighter p-4 rounded-border content-item is-selected">
                        <a class="item-link" href="">
                            <div>
                                <span class="icon is-medium">
                                <i class="fa fa-signal"></i>
                                </span>
                                <p class="has-text-weight-semibold">2KYLサービス利用状況</p>
                            </div>
                        </a>
                    </div>
                    <div class="has-text-centered has-background-grey-lighter p-4 rounded-border content-item">
                        <a class="item-link" href="">
                            <div>
                                <span class="icon is-medium">
                                <i class="fa fa-credit-card"></i>
                                </span>
                                <p class="has-text-weight-semibold">支払いカード情報</p>
                            </div>
                        </a>
                    </div>
                    <div class="has-text-centered has-background-grey-lighter p-4 rounded-border content-item">
                        <a class="item-link" href="">
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
                    <ChangeInfoBlock></ChangeInfoBlock>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import changeInfoBlock from "./change-info-block.vue";
    export default {
        components: {
            ChangeInfoBlock: changeInfoBlock
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

