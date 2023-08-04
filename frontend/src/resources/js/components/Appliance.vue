<template>
    <div>
        <h5 id="associating-form-text-with-form-controls">Name:</h5>
        <h6>{{ appliance.name }}</h6>
        <h5 id="associating-form-text-with-form-controls">Detail:</h5>
        <p>{{ appliance.detail }}</p>
        <h5 id="associating-form-text-with-form-controls">Voltage:</h5>
        <p>{{ appliance.voltage }}V</p>
        <h5 id="associating-form-text-with-form-controls">Label:</h5>
        <p>{{ appliance.label }}</p>
        <router-link :to="`/appliances/${appliance.id}/edit`" class="btn btn-primary">Edit</router-link>
    </div>
</template>

<script src="../../../services/ViewProduct"></script>
