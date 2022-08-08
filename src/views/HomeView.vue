<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
import axios from 'axios';

import HelloWorld from '@/components/HelloWorld.vue';

const API_APP = 'C:/Users/Dominik/Desktop/HomeBudgetV2/home-budgetv2/connect.php';

// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HelloWorld,
  },

  methods: {
    getUnits: function() {
      axios.get('home-budgetv2/Api/connect.php')
      .then((response) => {
        console.log(response);
    })
      .catch((error) => {
        console.log(error);
      });
    }
},
beforeMount(){
   this.getUnits()
},
};
</script>
