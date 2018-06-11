
            var partsKey = {
                id:'Id',
                clarke_model:'Clarke model',
                air_filter: 'Air filter',
                oil_filter: 'Oil filter',
                fuel_filter_primary: 'Fuel filter (pri.)',
                fuel_filter_secondary: 'Fuel filer (sec.)',
                alternator_12_vdc: 'Alternator (12VDC)',
                alternator_24_vdc: 'Alternator (24VDC)',
                alternator_belt: ' Alternator belt',
                fuel_injection_pump: 'Fuel Injection pump',
                heat_exchanger_usa_built: "Heat exchanger (USA built)",
                heat_exchanger_uk_built: "Heat exchanger (UK built)",
                starter_motor_12_vdc: "Starter motor (12VDC)",
                starter_motor_24_vdc: "Starter motor (24VDC)",
                oil_pressure_switch: "Oil pressure switch",
                speed_switch: "Speed switch",
                coolant_temperature_switch: "Coolant temp. sw.",
                turbocharger: "Thermostat",
                nozzle_injector: "Nozzle injector",
                oil_capacity: "Oil capacity",
                coolant_capacity: "Coolant capacity"
            }
            var app = new Vue({
                el: "#app",
                data: {
                    get_data:{
                    },
                    rows: partsKey
                },

                mounted: function() {
                   this.get_local();
                },

                methods: {
                   get_local: function(){
                    this.get_data= JSON.parse(localStorage.getItem("data"));
                    localStorage.removeItem("data");
                    console.log(this.get_data)
                   }
                }
            })
           