<template>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Voltage</th>
                <th scope="col">Label</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                <tr v-if="appliances.length === 0">
                  <td colspan="5"><center> Appliances not found </center></td>
                </tr>
                <tr v-for="appliance in appliances" :key="appliance.id">
                    <td>{{ appliance.name }}</td>
                    <td>{{ appliance.detail }}</td>
                    <td>{{ appliance.voltage }}V</td>
                    <td>{{ appliance.label }}V</td>
                    <td>
                      <div class="row gap-3">
                        <router-link :to="`/appliances/${appliance.id}`" class="p-2 col border btn btn-primary">View</router-link>
                        <router-link :to="`/appliances/${appliance.id}/edit`" class="p-2 col border btn btn-success">Edit</router-link>
                        <button @click="deleteAppliance(appliance.id)"  class="p-2 col border btn btn-danger">Delete</button>
                      </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script src="../../../services/ListDelete"></script>