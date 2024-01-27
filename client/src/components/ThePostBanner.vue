<template>
  <section id="post-banner" v-if="post" :style="{backgroundImage: `url('http://localhost:8000/storage/' + post.banner)`}">
    <div id="banner-text">
    </div>
  </section>
</template>
<script>
import formatDate from '../helpers/FormatDate'
export default {
  name: 'ThePost',
  props: {
    post: {
      type: Object,
      required: true
    }
  },
  watch: {
    post() {
      if (this.post) {
        this.updateImage();
      }
    }
  },
  methods: {
    formatDate,
    updateImage() {
      console.log(this.post.banner)
      this.$nextTick(() => {
        const banner = document.getElementById('post-banner');
        banner.style.backgroundImage = `url('http://localhost:8000/storage/${this.post.banner}')`;
      })
    }
  }
}
</script>