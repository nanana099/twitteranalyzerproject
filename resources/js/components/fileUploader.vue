<template>
  <file-input :params="{ limit: 100, unit: 'kb', allow: 'csv' }"></file-input>
</template>

<script>
import FileInput from "./fileInput.vue";
export default {
  name: "FileUploader",
  components: {
    FileInput
  }
};
</script>