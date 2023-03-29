<template>
    <div class="">
        <div class="header-text mb-5">
            <p class="has-text-weight-bold">現在のアカウント情報</p>
            <label class="input-info">現在のあなたのアカウント情報です。変更する情報がある場合は、該当箇所を上書き変更の上、「Save Changes」をクリックしてください。</label>
        </div>
        <div class="input-form">
            <div class="columns is-multiline is-vcentered">
                <div class="column is-4">
                    <label for="user_code" class="has-text-weight-bold">User Code</label>
                </div>
                <div class="column is-8">
                    <input id="user_code" type="text" class="input" v-model="userData['user_code']" >
                </div>
                <div class="column is-4">
                </div>
                <div class="column is-8 p-0">
                    <label class="input-info">ユーザーコードは変更することはできません。</label>
                </div>
            </div>
            <div class="columns is-multiline is-vcentered">
                <div class="column is-4">
                    <label for="user_code" class="has-text-weight-bold">User Image</label>
                </div>
                <div class="column is-8">
                    <div class="file has-name is-fullwidth">
                        <label class="file-label">
                            <input class="file-input" type="file" name="resume" accept="image/*" @change="updateImage($event)">
                            <span class="file-cta">
                              <span class="file-icon">
                                <i class="fa fa-upload"></i>
                              </span>
                              <span class="file-label">
                                Choose a file…
                              </span>
                            </span>
                            <span class="file-name">
                              {{userData['image']}}
                            </span>
                        </label>
                    </div>
                </div>
                <div class="column is-4">
                </div>
                <div class="column is-8 p-0">
                    <label class="input-info">デフォルトは、ZKYLのアイコンです。変更する場合は、画像をクリックしてく選択するか、アップしたい画像をドラッグアンドドロップしてください。なお、画像は、四角形の画像（1MB以下）をアップしてください。</label>
                </div>
            </div>
            <div class="columns is-multiline is-vcentered">
                <div class="column is-4">
                    <label class="has-text-weight-bold">User ID</label>
                </div>
                <div class="column is-8">
                    <input type="text" class="input" v-model="userData['user_id']">
                </div>
                <div class="column is-4">
                </div>
                <div class="column is-8 p-0">
                    <label class="input-info">連絡先メールアドレスになります。</label>
                </div>
            </div>
            <div class="columns is-multiline is-vcentered">
                <div class="column is-4">
                    <label class="has-text-weight-bold">User Name</label>
                </div>
                <div class="column is-8">
                    <input type="text" class="input" v-model="userData['name']">
                </div>
                <div class="column is-4">
                </div>
                <div class="column is-8 p-0">
                    <label class="input-info">お好きなユーザーです。</label>
                </div>
            </div>
            <div class="columns is-multiline is-vcentered">
                <div class="column is-4">
                    <label class="has-text-weight-bold">Gender</label>
                </div>
                <div class="column is-8">
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="gender" value="1" v-model="userData['gender']">
                            男
                        </label>
                        <label class="radio">
                            <input type="radio" name="gender" value="2" v-model="userData['gender']">
                            女
                        </label>
                    </div>
                </div>
            </div>
            <div class="columns is-multiline is-vcentered">
                <div class="column is-4">
                    <label class="has-text-weight-bold">Country</label>
                </div>
                <div class="column is-8">
                    <input type="text" class="input" v-model="userData['country']">
                </div>
                <div class="column is-4">
                </div>
                <div class="column is-8 p-0">
                    <label class="input-info">あなたの、現在の国籍です。</label>
                </div>
            </div>
            <div class="column">
                <button class="button yellow-btn is-pulled-right" @click="submit()">Save Changes</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "change-info-block",
    props: {
        userData: Object
    },
    data(){
        return{
            inputValue:[]
        }
    },
    methods: {
        updateImage(event){
            if (!event.target.files.length) return
            this.inputValue['image'] = {
                name: event.target.files[0].name,
                file: event.target.files[0]
            }
        },
        submit(){
            this.inputValue['name'] = this.userData['name'];
            this.inputValue['user_code'] = this.userData['user_code'];
            this.inputValue['user_id'] = this.userData['user_id'];
            this.inputValue['gender'] = this.userData['gender'];
            this.inputValue['country'] = this.userData['country'];
            this.$emit('submit', this.inputValue);
        }
    },

}
</script>

<style scoped>
    .input-info{
        color: #acaeb9;
        font-size: 0.9rem;
    }
    .columns > *{
        padding: 0;
    }
    .yellow-btn{
        background: #f6b832;
        color: white;
        border: none;
    }
</style>
