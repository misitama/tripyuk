const state = {
    tourDestination:[],
    modalTitle:'',
    disabledElement:0,
    formState:'add',
    filterIsDomestic:1,
    filterCountry:[],
    filterRegion:[],
    filterCity:[]
};
const action = {
    paginate:(context,token)=>{


    },
    create:(context,input)=>{

    },
    read:(context,token)=>{

    },
    delete:(context,params)=>{

    },
    loadForm:(context,formState)=>{
        context.commit('changeFormState',formState);
    },
};

const mutation={
    resetState(state){
        state.tourDestination = [];
        state.modalTitle = '';
        state.disabledElement = '';
        state.formState = 'add';
        state.filterIsDomestic = 1;
        state.filterCountry = [];
        state.filterRegion = [];
        state.filterCity = [];
    },
    changeFormState(state,formState){
        state.formState = formState;
        if(state.formState == 'edit'){
            state.modalTitle ='Edit Existing Destination';
            state.disabledElement = 0;
        }else if(state.formState =='detail'){
            state.modalTitle = 'Detail Destination';
            state.disabledElement = 1;
        }else{
            state.modalTitle = 'Add New Destination';
            state.disabledElement = 0;
        }
        $('#modalInput').modal('show');
    },
    getFilterCountryData(state,countryData){
        state.filterCountry.push(countryData);
    },
    getFilterRegionData(state,regionData){
        state.filterRegion.push(regionData);
    },
    getFilterCityData(state,cityData){
        state.filterCity.push(cityData);
    }
};

import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);
Vue.config.debug = true;

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    actions:action,
    mutations:mutation,
    state:state,
    strict: debug
});