import axios from 'axios';
export default {
  data() {
    return {
      products: []
    }
  },
  async created() {
    
    try {
      const response = await axios.get('http://localhost:8000/products' ,
      {
        headers: {
          'Content-Type': 'application/json',
        }
      }
      );
      this.products = response.data.data;
      console.log(this.products)
    } catch (error) {
      console.error(error);
    }
  },
  methods: {
    async deleteProduct(id) {
      try {
        await axios.get(`http://localhost:8000/products/${id}/delete`);
        this.products = this.products.filter(product => product.id !== id);
      } catch (error) {
        console.error(error);
      }
    }
  }
}