const {createApp} = Vue;
createApp({
	data() {
		return{
			apiURL:"./server.php",
            diskList:[ ],
		}
	},
    methods: {
        getApi() {
            axios.get(this.apiURL, {
        })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        })}

    },
    created() {
        
    },
}).mount ('#app');