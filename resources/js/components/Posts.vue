<template>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <h1 class="my-4 text-center">Hello World</h1>

                <div id="posts">
                    <div class="card mb-4" v-for="post in posts">
                        <div class="card-body">
                            <h2 class="card-title text-center">{{post.title}}</h2>
                            <p class="card-text">{{post.text | truncate(350, '...')}}</p>

                            <router-link :to="{ name: 'show', params: { postId : post.id } }">
                                <button type="button" class="btn btn-primary">
                                    Read More &rarr;
                                </button>
                            </router-link>

                        </div>
                        <div class="text-muted card-footer">
                            Posted by {{post.user.name}}
                            <span class="float-right">{{post.created_at | formatDate}}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
      mounted() {
        this.getPosts();
      },
      data() {
        return {
          posts: {}
        };
      },
      methods: {
        getPosts() {
          axios.get("/api/post").then(response => {
            this.posts = response.data.data;
          });
        },
      }
    };
</script>
