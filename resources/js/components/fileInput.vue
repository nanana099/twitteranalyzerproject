<template>
  <div>
    <!-- アップロードボックス -->
    <p class="c-error-msg" v-show="isError">csv ファイルのみアップロード可能です</p>
    <div
      class="p-registtweet__upload-file-area"
      @dragover.prevent="onArea"
      @drop.prevent="dropFile"
      @dragleave.prevent="offArea"
      @dragend.prevent="offArea"
    >
      <label class="p-registtweet__upload-file-input-label">
        ドラッグ＆ドロップ
        <br />またはクリックしてアップロード
        <input
          @change="changeFile"
          ref="file"
          type="file"
          name
          class="p-registtweet__upload-file-input"
          id
          multiple
        />
      </label>
    </div>

    <!-- ファイル一覧 -->
    <div class="p-registtweet__uploaded-file-area">
      <span v-show="!isSelected">ファイルが選択されていません</span>
      <div
        class="p-registtweet__uploaded-file-item"
        v-show="isSelected"
        v-for="(f,index) in file"
        :key="index"
      >
        <span class>{{ f.name }}</span>
        <span class="p-registtweet__uploaded-file-item-delete-button" @click="resetFile(index)">
          <div class="c-btn--batu">
            <span></span>
          </div>
        </span>
      </div>
    </div>

    <!-- 登録ボタン -->
    <button
      class="c-btn c-btn--primary p-registtweet__upload-btn"
      :class="{'c-btn--disable':!isSelected}"
      :disabled="!isSelected"
      @click="uploadFiles"
      v-show="!isUploading"
    >登録する &gt;</button>
  </div>
</template>


<script>
import { FileEvaluable } from "./../mixins/fileEvaluable";
export default {
  name: "FileInput",
  mixins: [FileEvaluable],

  data() {
    return {
      file: [],
      error: "",
      inArea: false,
      isUploading: false
    };
  },

  computed: {
    isError: function() {
      return this.error !== "";
    },
    isSelected: function() {
      return this.file.length;
    }
  },

  methods: {
    dropFile(e) {
      this.changeFile(e);
      this.offArea();
    },
    changeFile(e) {
      const files = e.target.files || e.dataTransfer.files;

      for (var i = 0; i < files.length; i++) {
        if (this.validation(files[i])) {
          this.file.push(files[i]);
        }
      }
    },
    resetFile(index) {
      const input = this.$refs.file;
      input.type = "text";
      input.type = "file";
      this.file.splice(index, 1);
      this.error = "";
    },
    validation(file) {
      if (!this.isAllowFileType(file.type)) {
        this.error = this.getErrorMessageType();
        return false;
      }

      if (!this.isAllowFileSize(file.size)) {
        this.error = this.getErrorMessageSize();
        return false;
      }

      this.error = "";
      return true;
    },
    onArea() {
      this.inArea = true;
    },
    offArea() {
      this.inArea = false;
    },
    uploadFiles() {
      console.log("piy");
      let fmData = new FormData();
      for (let i = 0; i < this.file.length; i++) {
        fmData.append("files[]", this.file[i]);
      }

      let that = this;
      that.isUploading = true;
      axios
        .post("/registtweet/post", fmData)
        .then(function(responce) {
          that.isUploading = false;
        })
        .catch(function(error) {
          that.isUploading = false;
        });
    }
  }
};
</script>
