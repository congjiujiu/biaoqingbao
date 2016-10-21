<template lang="html">
  <div class="header">
    <el-menu default-active="1" class="el-menu-demo" mode="horizontal" @select="handleselect">
      <router-link to="/"><el-menu-item index="1">主页</el-menu-item></router-link>
      <el-submenu index="2">
        <template slot="title">我的工作台</template>
        <el-menu-item index="2-1">选项1</el-menu-item>
        <el-menu-item index="2-2">选项2</el-menu-item>
        <el-menu-item index="2-3">选项3</el-menu-item>
      </el-submenu>
      <router-link to="/upload"><el-menu-item index="3">上传</el-menu-item></router-link>
    </el-menu>
  </div>
</template>

<script>
export default {
  name: 'headers',
  data () {
    return {}
  }
}
</script>

<style lang="css" scoped>
  .header {
    height: 100px;
  }
</style>
