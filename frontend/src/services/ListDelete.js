import axios from 'axios';
export default {
  data() {
    return {
      appliances: []
    }
  },
  async created() {
    
    try {
      const response = await axios.get('http://localhost:8000/appliances' ,
      {
        headers: {
          'Content-Type': 'application/json',
        }
      }
      );
      this.appliances = response.data.data;
      console.log(this.appliances)
    } catch (error) {
      console.error(error);
    }
  },
  methods: {
    async deleteAppliance(id) {
      try {
        await axios.get(`http://localhost:8000/appliances/${id}/delete`);
        this.appliances = this.appliances.filter(appliance => appliance.id !== id);
      } catch (error) {             
        console.error(error);
      }
    }
  }
}