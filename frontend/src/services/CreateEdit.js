import axios from 'axios';
export default {
  data() {
    return {
      product: {
        name: '',
        detail: ''
      }
    }
  },
  computed: {
    isNewProduct() {
      return !this.$route.path.includes('edit');
    }
  },
  async created() {
    if (!this.isNewProduct) {
      const response = await axios.get(`http://localhost:8000/products/${this.$route.params.id}`);
      this.product = response.data.data;
    }
  },
  methods: {
    async submitForm() {
      try {
        if (this.isNewProduct) {
          await axios.get('http://localhost:8000/products/create', { params: this.product });
        } else {
          await axios.get(`http://localhost:8000/products/${this.$route.params.id}/edit`, { params: this.product });
        }
        this.$router.push('/home');
      } catch (error) {
        console.error(error);
      }
    }
  }
}