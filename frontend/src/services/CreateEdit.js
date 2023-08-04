import axios from 'axios';
export default {
  data() {
    return {
      appliance: {
        name: '',
        detail: '',
        voltade: '',
        label: ''
      }
    }
  },
  computed: {
    isNewAppliance() {
      return !this.$route.path.includes('edit');
    }
  },
  async created() {
    if (!this.isNewAppliance) {
      const response = await axios.get(`http://localhost:8000/appliances/${this.$route.params.id}`);
      this.appliance = response.data.data;
    }
  },
  methods: {
    async submitForm() {
      try {
        if (this.isNewAppliance) {
          await axios.get('http://localhost:8000/appliances/create', { params: this.appliance });
        } else {
          await axios.get(`http://localhost:8000/appliances/${this.$route.params.id}/edit`, { params: this.appliance });
        }
        this.$router.push('/home');
      } catch (error) {
        console.error(error);
      }
    }
  }
}