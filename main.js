const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            data: '',
            discDetails: ''
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
        clickCard(i) {
            const datoIndice = {
                discIndex: i
            }

            axios.post(this.apiUrl, datoIndice, { headers: { 'Content-Type': 'multipart/form-data' } })
                .then((res) => {
                    this.discDetails = res.data;
                })
        }
    },
    mounted() {
        this.chiamataApi();
    }
}).mount('#app')