const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            data: '',
        }
    },
    methods: {
        chiamataApi() {
            axios.get(this.apiUrl)
                .then((res) => {
                    this.data = res.data;
                    // console.log(res.data);
                })
        },
        clickCard() {
        }
    },
    mounted() {
        this.chiamataApi();
    }
}).mount('#app')