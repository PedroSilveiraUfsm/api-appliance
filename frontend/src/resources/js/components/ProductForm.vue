<template>
  <div>
    <h2 v-if="isNewProduct">Add Product</h2>
    <h2 v-else>Edit Product</h2>
      <form @submit.prevent="submitForm">
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input class="form-control" type="text" id="name" v-model="product.name" required />
        </div>
        <div class="mb-3">
          <label for="detail" class="form-label">Description:</label>
          <textarea class="form-control" id="detail" v-model="product.detail" required></textarea>
        </div>
        <button type="submit" v-if="isNewProduct" class="btn btn-primary">Add Product</button>
        <button type="submit" v-else class="btn btn-primary">Update Product</button>
      </form>
  </div>
</template>
<script src="../../../services/CreateEdit"></script>
