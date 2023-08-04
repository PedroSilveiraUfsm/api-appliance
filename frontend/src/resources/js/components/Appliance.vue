<template>
    <div>
        <h5 id="associating-form-text-with-form-controls">Name:</h5>
        <h6>{{ appliance.name }}</h6>
        <h5 id="associating-form-text-with-form-controls">Description:</h5>
        <p>{{ appliance.detail }}</p>
        <router-link :to="`/appliances/${product.id}/edit`" class="btn btn-primary">Edit</router-link>
    </div>
</template>

<script src="../../../services/ViewProduct"></script>
