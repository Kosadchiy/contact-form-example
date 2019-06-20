<style>
.deleteButton {
  cursor: pointer;
}
.deleteButton:hover {
  color: #ff407b;
}
</style>
<template>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Question</th>
        <th scope="col">Files</th>
        <th scope="col">Answer</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(item, index) in questions" v-bind:key="item.id">
        <th scope="row">{{index + 1}}</th>
        <td>{{item.name}}</td>
        <td>{{item.email}}</td>
        <td>{{item.question}}</td>
        <td>
          <i v-if="item.files.length" class="fa fa-paperclip"></i>
        </td>
        <td>
          <i v-if="item.answer" class="fa fa-check"></i>
        </td>
        <td>
          <a :href="`/admin/questions/${item.id}`">View</a>
          <span>|</span>
          <span class="deleteButton" v-on:click="deleteItem(item.id, index)">Delete</span>
        </td>
      </tr>
    </tbody>
  </table>
</template>
<script>
import Axios from "axios";

export default {
  props: ["items"],
  data() {
    return {
      questions: this.items
    };
  },
  methods: {
    deleteItem(id, index) {
      Axios.post(`/admin/questions/${id}/delete`).then(response => {
        if (response.status === 200) {
          this.questions.splice(index, 1);
        }
      });
    }
  }
};
</script>
