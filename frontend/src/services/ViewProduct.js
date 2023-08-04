import axios from 'axios';
export default {
data() {
    return {
    appliance: {}
    }
},
async created() {
    try {
    const response = await axios.get(`http://localhost:8000/appliances/${this.$route.params.id}`);
    this.appliance = response.data.data;
    } catch (error) {
    console.error(error);
    }
}
}