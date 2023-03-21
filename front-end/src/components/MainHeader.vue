<template>
    <div style="background: white">
        <div class="main-header">
            <div class="container" style="padding-top: 15px">
                <div class="level">
                    <div class="level-left">
                        <a href="#"><img src="../assets/images/bulma.png" alt="" style="height: 50px;"></a>
                    </div>
                    <div class="level-right">
                        <img src="../assets/images/japan-icon.png" alt="" style="height: 20px;">
                    </div>
                </div>

            </div>
        </div>
        <div class="main-menu">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <a class="navbar-item" href="">
                                <span class="icon-text">
                                    <span class="icon">
                                        <i class="fa fa-tachometer"></i>
                                    </span>
                                    <span>Dashboards</span>
                                </span>
                            </a>
                        </div>
                        <div class="level-item">
                            <a class="navbar-item" href="">
                                <span class="icon-text">
                                    <span class="icon">
                                        <i class="fa fa-wifi"></i>
                                    </span>
                                    <span>Device Settings</span>
                                </span>
                            </a>
                        </div>
                        <div class="level-item">
                            <a class="navbar-item" href="">
                                <span class="icon-text">
                                    <span class="icon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                    <span>API Form</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MainHeader"
}
</script>

<style scoped>
    .main-header{
        background: #3c4854;
        height: 80px;
    }
    .navbar-item{
        font-weight: 600;
    }
</style>
