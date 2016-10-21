<template lang="html">
  <div class="upload">
    <el-upload
      action="http://123.206.6.70/biaoqingbao/data/upload.php"
      type="drag"
      :thumbnail-mode="true"
      :on-preview="handlePreview"
      :on-remove="handleRemove"
      >
      <i class="el-icon-upload"></i>
      <div class="el-dragger__text">将文件拖到此处，或<em>点击上传</em></div>
      <div class="el-upload__tip" slot="tip">只能上传jpg/png文件，且不超过500kb</div>
      </el-upload>
  </div>
</template>

<script>
export default {
  name: 'upload',
  data () {
    return {}
  },
  computed: {},
  mounted () {},
  methods: {
    handleRemove(file, fileList) {
      console.log(file, fileList);
    },
    handlePreview(file) {
      console.log(file);
    }
  },
  components: {}
}
</script>

<style lang="css">
</style>
