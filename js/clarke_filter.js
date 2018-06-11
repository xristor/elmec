var validModel = function(strModel){
    if (strModel.length < 4){
        return strModel;
    }

    var intPos = strModel.search("-");
    String.prototype.splice = function(idx, rem, str) {
        return this.slice(0, idx) + str + this.slice(idx + Math.abs(rem));
    };

    if (intPos == 4) {
	    message = "Valid Engine Model";
    }else{
        strModel = strModel.replace(/-/i, '');
        strModel = strModel.splice(4, 0, "-");
    }
    return strModel;
}

var app = new Vue({
    el:"#app",
    data: {
        
        filters:{},
        clarke_model: '',
        count:0,
        extend_data: {},        
    },

    methods: {
        display_more: function(index){

            var myWindow = window.open("indexi.php","detail");
            
            this.extend_data = this.filters[index];
            //console.log (this.extend_data)
            localStorage.setItem('data', JSON.stringify(this.extend_data));
            
        },
       
        search_filter: function(){
            this.clarke_model = validModel(this.clarke_model);
            axios({
                method: 'GET',
                url: "api/filters/search_filters.php?s=" + this.clarke_model
            }).then(function(response){
                //console.log(response.data)
                app.filters = response.data.records;
                app.count = response.data.count;
            })
        },
    }   
   
})