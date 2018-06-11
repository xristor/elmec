var gridColumnData = {
    id: 'Id',   
    project_name: 'Project name ',
    application: 'Application ',
    application_model:'Application model ',
    engine_model: "Engine model ",
    air_filter: 'Air filter ',
    oil_filter: 'Oil filter ',
    oil_filter_bypass: 'Oil fitler (bypass) ',
    fuel_filter_primary: 'Fuel filter (pri.) ',
    fuel_filter_secondary: 'Fuel filter (sec.) ',
    coolant_filter: 'Coolant filter '
}



var app = new Vue({
    el:"#app",
    data: {
        customers: [],
        temp_data:{},
        gridColumns: gridColumnData,
        search:'',
        customer_id: 0,
        datasheets:{},
        selected:'',
        records_count:0,
        show_serial_list:false,
     
        
    },

    mounted: function(){
       this.get_customers();
    },

    methods: {
       
        get_customers: function(){
            axios({
                method:'GET',
                url: "api/customer/read_customer.php",
            }).then(function(response){
                //console.log(response.data);
                app.customers = response.data.records;
            })
        },

        search_serial_number: function(){
            axios({
                method: 'GET',
                url: "api/datasheet/search_datasheet.php?s=" + this.customer_id
            }).then(function(response){
                //console.log(response.data)
                app.datasheets = response.data.records;
                app.records_count = response.data.count;
            })
        },

        display_parts: function(){
            //console.log (this.datasheets[this.selected]);
            this.temp_data = this.datasheets[this.selected];
        }
    },

    computed: {
        filteredItems() {
          return this.customers.filter(item => {
             return item.customer_name.indexOf(this.search.toLowerCase()) > -1
          })
        }
      }  
})