const app = new Vue(
    {
        el: '#app',
        data: {
            url: window.location.href + '/../api/api-dischi.php',
            dischi: ''
        },
        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    // console.log(response.data);
                    this.dischi = response.data;
                    console.log(this.dischi);
                })
                .catch(error => {
                    console.log(error);
                });
        },
    }
);