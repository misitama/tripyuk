<template>
    <nav class="navbar navbar-default yamm" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse large-icons-nav" id="horizontal-navbar">
            <ul class="nav navbar-nav">
                <li id="dashboard"><router-link :to="{ name: 'dashboard' }" id="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></router-link></li>
                <li class="dropdown" id="userGroup">
                    <a href="#" class="dropdown-toggle" data-toggle='dropdown'><i class="fa fa-user"></i> <span>Users <i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" @click.prevent="navClick('/users')">All Users</a></li>
                        <li><a href="#" @click.prevent="navClick('/roles')">User Role</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="masterData">
                    <a href="#" class="dropdown-toggle" data-toggle='dropdown'><i class="fa fa-database"></i> <span>Master Data<i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" @click.prevent="navClick('/hotel-type')">Master Hotel Type</a></li>
                        <li><a href="#" @click.prevent="navClick('/facilities')">Master Facilities</a></li>
                        <li><a href="#" @click.prevent="navClick('/bed-type')">Master Bed Type</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-briefcase"></i> <span>Holiday</span></a></li>
                <li><router-link :to="{name:'airlinesBook'}"><i class="fa fa-plane"></i> <span>Air Lines</span></router-link></li>
                <li><a href="#"><i class="fa fa-train"></i> <span>Train</span></a></li>
                <li><a href="#"><i class="fa fa-dollar"></i> <span>Finance</span></a></li>
                <li><a href="#"><i class="fa fa-line-chart"></i> <span>Reports</span></a></li>
            </ul>
        </div>
    </nav>

</template>

<script>
    export default{
        data(){
            return{
                url:'/dashboard'
            }
        },
        methods:{
            navClick:function (url) {
                this.url = url;
                console.log(this.url);
                if(this.url === '/users' || this.url ==='/roles') {
                    $('#userGroup').addClass('active');
                }else if(this.url === '/bed-type'){
                    $('#masterData').addClass('active');
                }else{
                    $('#dasboard').addClass('active');
                }

                return this.$router.push(this.url);
            }
        }
    }
</script>