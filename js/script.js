/*
**Seconda Milestone:**

Attraverso l’utilizzo di axios: al caricamento della pagina 
axios chiederà, attraverso una chiamata api, i dischi a php 
e li stamperà attraverso vue CDN.

Questo file lo chiamate index-vue.html che chiamerà via 
axios un file che si chiamerà api.php.
api.php includerà lo stesso “database” che viene incluso 
anche in index.php


**Bonus:**
Attraverso la select dei generi filtrare i generi 
selezionati tramite le chiamate API
*/


const app = new Vue ({
  
  el: '#app',

  data:{
    apiUrl: 'http://localhost:8888/php-ajax-dischi/php/api.php',
    discs: [],

    genres: [],
    selectedGenre: 'All',

    errorMessage: '',
    isError: false,
  },

  mounted(){
    this.getApi();
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl, {
        params:{
          genre: this.selectedGenre
        }
      })
      .then(res => {
        this.discs = res.data.discs;
        this.genres = res.data.genres;
        console.log('array dischi', this.discs);
        console.log('array generi', this.genres);
      })
      .catch(error => {
        this.errorMessage = error;
        this.isError = true;
        console.log('ERRORE', this.errorMessage);
      })
    },

  },
  
})