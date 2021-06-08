Vue.config.devtools = true;

var app = new Vue({
    el: '#root',
    data: {
        randoms : [],
    },
    mounted() {
      
        axios.get("http://127.0.0.1:8000/api/random")
        .then((response) => {
            this.randoms = response.data.data;
            console.log('ok');
            
        });
    }
  });