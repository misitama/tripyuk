<template>

</template>

<script>
    export default{
        data(){
           return{
               airlineList:[],
               airlineName:''
           }
        },
        props:['airlineListSource'],
        mounted:function () {
            var app = this;
            app.airlineList = app.props.airlineListSource;
            console.log(app.airlineList);

        }
    }
</script>