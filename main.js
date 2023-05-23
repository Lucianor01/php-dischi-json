const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'apis/listaDischi.php',
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
        }
    },
    mounted() {
        this.chiamataApi();
    }
}).mount('#app')