<template>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <h1 class="my-4 text-center">Hello World</h1>

                <div id="post">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title text-center">{{post.title}}</h2>
                            <p class="card-text">{{post.text}}</p>

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
    console.log('its works');
    this.getPost();
  },
  props: {
    postId: {
      type: String,
      required: true
    }
  },
  data() {
        return {
            post: {}
        };
    },
  methods: {
    getPost() {
      axios.get('/api/post/' + this.postId).then(response => {
        this.post = response.data.data;
      });
    }
  }
};
</script>
