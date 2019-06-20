<style>
.uploaded-image {
  float: left;
  overflow: hidden;
  margin: 5px;
  border-radius: 4px;
}
.uploaded-image img {
  height: 70px;
  height: 100px;
  margin: -5px;
}
.uploaded-image img:hover {
  filter: blur(8px);
  transform: scale(1.05, 1.05);
}
</style>
<template>
  <div>
    <div>
      <button
        v-if="!filesCount"
        type="button"
        class="btn btn-primary"
        @click="uploadClick"
      >Choose files</button>
      <button v-if="filesCount" type="button" class="btn btn-primary" @click="removeFiles">Clear</button>
      <input type="hidden" name="MAX_FILE_SIZE" value="20971520">
      <input
        name="files[]"
        v-show="false"
        id="upload-input"
        type="file"
        multiple
        @change="onFileChange"
      >
      <span>Files count: {{filesCount}}</span>
    </div>
    <div style="clear:both"></div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      filesCount: 0
    };
  },
  methods: {
    uploadClick: function() {
      document.getElementById("upload-input").click();
    },
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.filesCount = files.length;
    },
    removeFiles: function(e) {
        document.getElementById("upload-input").value = "";
        this.filesCount = 0;
    }
  }
};
</script>
