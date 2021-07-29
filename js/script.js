const app = new Vue(
    {
        el: '#app',
        data: {
            url: window.location.href + '/../api/api-dischi.php',
            dischi: '',
            generi: []
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
        methods:{

            filtraGeneri(array){
                array.forEach(element => {
                    if(!this.generi.includes(element.genre)){
                        this.generi.push(element.genre)
                    }

                });
            }
        }
    }
);