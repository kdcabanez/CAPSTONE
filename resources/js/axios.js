import axios from "axios";

const apiClient = axios.create({
    baseURL: import.meta.env.VITE_APP_URL
})

apiClient.interceptors.request.use(config => {
    if (config.url.includes('/sanctum/csrf-cookie') || config.method === 'get') {
        return config;  // Skip token for safe requests
    }

    const token = document.querySelector('meta[name="csrf-token"]');
    if (token) {
        config.headers['X-CSRF-TOKEN'] = token.content;  // ✅ Adds CSRF for registration
    }
    return config;

})

apiClient.interceptors.response.use(
    (response) => response,  // Success - pass through

    (error) => {
        if (error.response?.status === 422) {
            // Show first validation error
            const firstError = Object.values(error.response.data.errors)[0][0];
            console.error('Validation Error:', firstError);
        }

        if (error.response?.status === 401) {
            // Redirect to login
            window.location.href = '/login';
        }

        return Promise.reject(error);
    }
);

export default apiClient
