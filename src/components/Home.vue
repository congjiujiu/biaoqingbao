<template lang="html">
  <div class="home">
    <div class="cards">
      <div class="wrapper" v-for="url in urls">
          <img v-bind:src="url" alt="" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      urls: []
    }
  },
  computed: {},
  mounted () {
    var urlHere = [];
    this.$http.get('http://123.206.6.70/biaoqingbao/data/getList.php')
    .then(res => {
      var temObj = JSON.parse(res.body);
      temObj.forEach(v=>{
        urlHere.push(`http://123.206.6.70/biaoqingbao/upload/${v.id}.${v.subfix}`);
      });
      this.urls = urlHere;
    });
  },
  methods: {},
  components: {}
}
</script>

<style lang="css" scoped>
  .home {
      padding: 0 20px;
  }
  div img {
    width: 100%;
  }

  .wrapper {
    display: inline-block;
    width: 12.5%;
    padding: 5px;
  }

  .wrapper:hover {
    background-color: #ddd;
  }

  .wrapper img {
    width: 100%;
  }
</style>
