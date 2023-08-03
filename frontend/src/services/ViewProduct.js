import axios from 'axios';
export default {
data() {
    return {
    product: {}
    }
},
async created() {
    try {
    const response = await axios.get(`http://localhost:8000/products/${this.$route.params.id}`);
    this.product = response.data.data;
    } catch (error) {
    console.error(error);
    }
}
}