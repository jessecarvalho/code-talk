<template>
    <main>
      <the-navbar />
      <the-post-banner :post="post" />
      <the-post :post="post" />
      <the-footer />
    </main>
</template>
  
<script setup>
    import TheNavbar from '../components/TheNavbar.vue'
    import ThePostBanner from '../components/ThePostBanner.vue'
    import ThePost from '../components/ThePost.vue'
    import TheFooter from '../components/TheFooter.vue'
</script>

<script>
import ApiService from '../services/ApiService';
import { useRoute } from 'vue-router';

export default {
  data() {
    return {
      post: []
    };
  },
  created() {
    const route = useRoute();
    this.fetchData('/post/' + route.params.id);
  },
  methods: {
    async fetchData(url) {
      this.post = await ApiService.fetchData(url);
    }
  }
};
</script>