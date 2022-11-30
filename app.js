console.log('hello')

const { createApp } = Vue


createApp( {
    data() {
        return {
            message: 'Hello Vue!',
            newTask: "",
            tasks : [
            ],
            users: [
                {
                    nome: 123,
                    213: 123123 ,
                }
            ],
            api_url: './server.php'
        }
    },
    methods: {
        readTasks(url) {
        axios
            // .put SOVRASCRIVE qualcosa che già esiste
            // .post PUSHA // aggiunge nuovi valori 
            .get(url) 
            .then(element =>{
                console.log(element);
                this.tasks = element.data
            })
            .catch(err =>{
                console.error(err.message);
            })
        },
        postTask(){
            axios
            .post(this.api_url,{ task : this.newTask},
            { headers: { 'Content-Type' : 'multipart/form-data' } }) 
            .then(element =>{
                this.tasks = element.data
                console.log("FUNZIONO");
            })
        },

    },
    mounted(){
        //this.readTasks(this.api_url);
        //this.postTask(this.api_url);
        console.log(this.tasks);
    }
}).mount('#app')