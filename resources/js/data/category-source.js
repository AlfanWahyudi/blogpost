import axios from "axios";

class CategorySource {
    async list() {
        const response = await axios.get(`${import.meta.env.VITE_APP_URL_DEV}/categories`);
        return response.data;
    }
}

export default CategorySource;
