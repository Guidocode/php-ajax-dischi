/*
**Seconda Milestone:**

Attraverso l’utilizzo di axios: al caricamento della pagina 
axios chiederà, attraverso una chiamata api, i dischi a php 
e li stamperà attraverso vue CDN.

Questo file lo chiamate index-vue.html che chiamerà via 
axios un file che si chiamerà api.php.
api.php includerà lo stesso “database” che viene incluso 
anche in index.php
*/


const app = new Vue ({
  
  el: '#app',

  data:{
    apiUrl: 'http://localhost:8888/php-ajax-dischi/php/api.php',
    discs: []
  },

  mounted(){
    this.getApi();
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl)
      .then(res => {
        this.discs = res.data.response;
        console.log(this.discs);
      })
    }
  }
})