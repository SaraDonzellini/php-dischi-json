const { createApp } = Vue;
createApp({
    data() {
        return {
            apiURL: "./server.php",
            diskList: [],
        }
    },
    methods: {
        getAPI() {
            axios.get(this.apiURL)
              .then((response) => {
                console.log(response.data);
                this.diskList = response.data;
                 console.log(this.diskList) 
            });
        },
    },
    created() {
        this.getAPI();
    },
}).mount('#app');