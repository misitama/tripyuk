<template>
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4 class="text-center" :style="{'margin-bottom': '25px'}">Partner Registration</h4>
            <form id="frmLogin" class="form-horizontal" :style="{'margin-bottom': '0px'}" @submit.prevent="login">
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Input your email as username" v-model="email" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" v-model="password" id="password"
                                   placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="pull-right"><label><input name="remember" id="remember" type="checkbox" v-model="remember" value="1" checked> Remember Me</label></div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </form>

        </div>
        <div class="panel-footer">
            <!--<router-link :to="name:'forgotPassword'" class="pull-left btn btn-link"  v-bind:style="{padding-left:0}">Forgot password?</router-link>-->
        </div>
    </div>
</template>