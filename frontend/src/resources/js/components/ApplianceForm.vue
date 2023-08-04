<template>
  <div>
    <h2 v-if="isNewAppliance">Add Appliance</h2>
    <h2 v-else>Edit Appliance</h2>
      <form @submit.prevent="submitForm">
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input class="form-control" type="text" id="name" v-model="appliance.name" required />
        </div>
        <div class="mb-3">
          <label for="detail" class="form-label">Detail:</label>
          <textarea class="form-control" id="detail" v-model="appliance.detail" required></textarea>
        </div>
        <div class="mb-3">
          <label for="voltage" class="form-label">Voltage:</label>
          <input class="form-control" type="text" id="voltage" v-model="appliance.voltage" required />
        </div>
        <div class="mb-3">
          <label for="label" class="form-label">Label:</label>
          <input class="form-control" type="text" id="label" v-model="appliance.label" required />
        </div>
        <button type="submit" v-if="isNewAppliance" class="btn btn-primary">Add Appliance</button>
        <button type="submit" v-else class="btn btn-primary">Update Appliance</button>
      </form>
  </div>
</template>
<script src="../../../services/CreateEdit"></script>
