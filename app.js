
  const { createApp } = Vue

  createApp({
    data() {
      return {
        //4.mi creo un array vuoto
        disks: [],
      }
    },
    methods:{
      //5.funzione per la chiamata axios.get per recuperare i dati dal file server.php
      fetchData(){
        axios.get('server.php').then((res) =>{
          console.log(res.data),
          this.disks = res.data
        })
      }
    },
    created(){
      //6.richiamo la funzione fetchData() nel methods
      //[consente di accedere ai methods e ai dati
      //e allo stesso tempo di avviare il processo di recupero mentre Vue sta montando l'app]
      this.fetchData();
    }
  }).mount('#app')
