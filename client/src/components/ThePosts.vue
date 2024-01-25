<template>
  <section id="posts">
    <div id="posts-title">
      <h2>Todos os Posts</h2>
        </div>
        <div class="posts-grid">
            <div class="post-col" v-for="post in posts" :key="post.id">
              <a href="">
                <img src="../assets/imgs/posts/01.jpg" alt="Imagem de post 1">
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

      <div class="w-full d-flex">
            <button class="btn btn-purple">
                Veja Mais Posts
            </button>
        </div>

    </section>

</template>


<script>
  import FormatDate from '../helpers/FormatDate'
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