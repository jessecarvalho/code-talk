<template>
  <section id="posts">
    <div class="posts-grid">
      <div class="post-col" v-for="post in posts" :key="post.id">
        <a :href="'/post/' + post.slug">
          <img :src="'http://localhost:8000/storage/' + post.banner " alt="Imagem de post 1">
          <div class="post-description">
            <h3>{{ post.title }}</h3>
            <p>{{ post.resume }}</p>
            <div class="excerpt">
              <div class="item">
                <p>{{ formatDate(post.updated_at) }}</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
</template>

<script>
  import formatDate from '../helpers/FormatDate'
  export default {
    name: 'ThePosts',
    methods: { formatDate },
      props: {
          posts: {
              type: Array,
              required: true
          }
      }
    }
</script>