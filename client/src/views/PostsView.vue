<template>
    <main>
      <the-navbar />
      <the-posts-banner />
      <the-posts :posts="posts"/>
      <the-footer />
    </main>
</template>

<script setup>
import TheNavbar from '../components/TheNavbar.vue'
import ThePostsBanner from '../components/ThePostsBanner.vue'
import ThePosts from '../components/ThePosts.vue'
import TheFooter from '../components/TheFooter.vue'
</script>

<script>
import ApiService from '../services/ApiService';

export default {
  data() {
    return {
      posts: []
    };
  },
  created() {
    this.fetchData('/posts/9');
  },
  methods: {
    async fetchData(url) {
      this.posts = await ApiService.fetchData(url);
    }
  }
};
</script>