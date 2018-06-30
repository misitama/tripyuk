export default{
    filterIsDomestic(val) {
        let app = this;
        if(val !=''){
            $('#tblTourDestination').bootgrid('reload');
            app.getDataCountry();
            $('#tblTourDestination').bootgrid('reload');
        }
    },
    filterCountry(val){
        let app = this;
        if(val !== null || val !==''){
            if(app.filterIsDomestic == 1){
                app.getDataRegion();
            }
        }
    },
    filterRegion(val){
        let app = this;
        if(val !== null || val !==''){
            app.getDataCity();
        }
    }
}